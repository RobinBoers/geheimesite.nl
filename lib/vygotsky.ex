defmodule Vygotsky do
  @moduledoc false

  @version Mix.Project.config()[:version]
  def version, do: @version

  defmodule Builder do
    @moduledoc false

    defmacro __using__(_) do
      quote do
        use Phoenix.Component

        require VEEx
        require BibTeX

        import Vygotsky
        import Vygotsky.CoreComponents

        @host __DIR__ |> Path.split() |> List.last()
        @dist Path.join([File.cwd!(), "dist", @host])

        File.mkdir_p!(@dist)

        IO.puts("==> Compiling #{@host}")

        @everything __DIR__ <> "/**/*"
        @count length(Path.wildcard(@everything))

        def __mix_recompile__? do
          length(Path.wildcard(@everything)) != @count
        end
      end
    end
  end

  use Phoenix.Component
  import Phoenix.HTML

  embed_templates "layouts/*"
  embed_templates "templates/*"

  @icons Application.app_dir(:vygotsky, "priv/icons/*.svg")
  @shared Application.app_dir(:vygotsky, "priv/shared/*.html")
  @refs Application.app_dir(:vygotsky, "priv/refs/*.bib")

  for path <- Path.wildcard(@icons) do
    @external_resource path

    @icon Path.basename(path)
    @svg File.read!(path)

    def icon(%{name: @icon} = assigns) do
      assigns = assign(assigns, :svg, @svg)
      ~H"{raw(@svg)}"
    end
  end

  for path <- Path.wildcard(@shared) do
    @external_resource path

    @name Path.basename(path)
    @contents File.read!(path)

    def embed(%{name: @name} = assigns) do
      assigns = assign(assigns, :inner, @contents)
      ~H"{raw(@inner)}"
    end
  end

  for path <- Path.wildcard(@refs) do
    @external_resource path

    @slug Path.basename(path)
    @apa BibTeX.read!(path)

    def cite(%{refs: @slug} = assigns) do
      assigns = assign(assigns, :apa, @apa)
      ~H"{raw(@apa)}"
    end
  end

  defmacro register_dependencies!(path) do
    quote do
      dependencies = resolve_dependencies(unquote(path))

      for path <- dependencies do
        Module.put_attribute(__MODULE__, :external_resource, path)
      end

      dependencies
    end
  end

  def resolve_dependencies(path) do
    path = Path.expand(path)
    resolve_dependencies([path], MapSet.new([path]), [])
  end

  defp resolve_dependencies([], _seen, dependencies), do: Enum.reverse(dependencies)

  defp resolve_dependencies([path | rest], seen, dependencies) do
    discovered =
      path
      |> scan_dependencies()
      |> Enum.map(&Path.expand(&1, Path.dirname(path)))
      |> Enum.uniq()
      |> Enum.reject(&MapSet.member?(seen, &1))

    resolve_dependencies(
      rest ++ discovered,
      Enum.reduce(discovered, seen, &MapSet.put(&2, &1)),
      Enum.reverse(discovered, dependencies)
    )
  end

  defp scan_dependencies(path) do
    source = File.read!(path)

    case Path.extname(path) do
      ".css" ->
        ~r/@import\s+(?:url\(\s*)?["']([^"']+)["']/
        |> Regex.scan(source)
        |> Enum.map(fn [_, dependency] -> dependency end)
        |> Enum.reject(fn dependency ->
          URI.parse(dependency).scheme != nil or String.starts_with?(dependency, "/")
        end)

      extension when extension in [".eex", ".heex", ".html"] ->
        ~r/<\.embed\b[^>]*\bname="([^"]+)"/
        |> Regex.scan(source)
        |> Enum.map(fn [_, name] -> shared_path(name) end)
    end
  end

  def icon_path(path) do
    Application.app_dir(:vygotsky, "priv/icons/#{path}")
  end

  def shared_path(path) do
    Application.app_dir(:vygotsky, "priv/shared/#{path}")
  end

  def ref_path(path) do
    Application.app_dir(:vygotsky, "priv/refs/#{path}")
  end

  # This black-magic fuckery ensures the current module is
  # recompiled if there are new files in `icons` or `refs`.

  @priv Application.app_dir(:vygotsky, "priv/**/*")
  @count length(Path.wildcard(@priv))

  def __mix_recompile__? do
    length(Path.wildcard(@priv)) != @count
  end

  # During a compilations, freshly-compiled modules live in the compiler's
  # memory and aren't visible to other processes. This forces critical rendering
  # modules to get loaded before a tasks tries to use them.
  @runtime_modules [XML, YAML, Smartypants, BibTeX, VEEx, Vygotsky, Vygotsky.CoreComponents]

  def __ensure_runtime__(extra \\ []) do
    Enum.each(@runtime_modules ++ extra, &Code.ensure_compiled!/1)
  end

  # The rest of this file consists of various helpers that can
  # be used in both templates and builders.

  def config!(opt) do
    Application.fetch_env!(:vygotsky, opt)
  end

  def config!(scope, opt) do
    :vygotsky
    |> Application.fetch_env!(scope)
    |> Keyword.fetch!(opt)
  end

  def sh!([cmd | args]), do: sh!(cmd, args)

  def sh!(cmd) when is_binary(cmd) do
    cmd |> String.split(" ") |> sh!()
  end

  def sh!(cmd, args) do
    case System.cmd(cmd, args) do
      {output, 0} -> String.trim(output)
      {error, _} -> raise "#{cmd}: #{error}"
    end
  end

  defmacro glob(path) do
    quote do
      [__DIR__, unquote(path)]
      |> Path.join()
      |> Path.wildcard()
    end
  end

  defmacro source(path) do
    quote do
      Path.join(__DIR__, unquote(path))
    end
  end

  defmacro target(path, opts \\ []) do
    quote do
      if Keyword.get(unquote(opts), :relative, false) do
        "/" <> output(unquote(path), unquote(opts))
      else
        Path.join(@dist, output(unquote(path), unquote(opts)))
      end
    end
  end

  @doc """
  A parallel comprehension. Like `for`, but each iteration runs in
  its own task across all schedulers.

  Source files (binary items) are registered as `@external_resource`
  automatically; pass `resource:` when the path lives in a field of
  the item. Pass `into:` to collect results into a map (as with `for`).

  Pass `load:` with any modules the body reaches that are compiled in
  this same run (e.g. a template embedding `Blog.list_posts/0`) — they
  live only in the compiler's memory and must be loaded before the task
  can see them.

      async path <- glob("*.md.heex") do
        File.write!(target(path), render_template!(path))
      end

      async path <- glob("*.{xml,json}.eex"), load: [Blog] do
        File.write!(target(path), render_template!(path))
      end

      async entry <- Blog.list_posts(), resource: entry.source do
        File.write!(target(entry.path), render_layout!(:entry, entry.content, entry))
      end

      async path <- glob("*.css"), into: %{} do
        {path, build(path)}
      end

  Module attributes cannot be written inside the body (it runs in a
  spawned task); register dependencies in a sequential pass beforehand.
  """
  defmacro async({:<-, _, _} = gen, do: body), do: build_async(gen, [], body)
  defmacro async({:<-, _, _} = gen, opts, do: body), do: build_async(gen, opts, body)

  defp build_async({:<-, _, [pattern, source]}, opts, body) do
    register =
      case Keyword.get(opts, :resource) do
        nil -> quote(do: for(item <- src, is_binary(item), do: @external_resource(item)))
        res -> quote(do: for(unquote(pattern) <- src, do: @external_resource(unquote(res))))
      end

    collect =
      case Keyword.get(opts, :into) do
        nil -> quote(do: Enum.map(stream, fn {:ok, r} -> r end))
        into -> quote(do: Enum.into(stream, unquote(into), fn {:ok, r} -> r end))
      end

    quote do
      src = unquote(source)
      unquote(register)

      Vygotsky.__ensure_runtime__(unquote(Keyword.get(opts, :load, [])))

      stream =
        Task.async_stream(src, fn unquote(pattern) -> unquote(body) end,
          ordered: false,
          timeout: :infinity
        )

      unquote(collect)
    end
  end

  defmacro copy_through(path) do
    quote do
      @copy source(unquote(path))
      @dest target(unquote(path))

      @external_resource @copy

      if outdated?(@dest, @copy) do
        File.cp!(@copy, @dest)
      end
    end
  end

  def output(path, opts \\ []) do
    path = path |> List.wrap() |> Path.join()

    rootname =
      cond do
        String.ends_with?(path, "Caddyfile") -> path
        String.ends_with?(path, ".eex") -> path |> Path.rootname(".eex") |> output()
        String.ends_with?(path, ".heex") -> path |> Path.rootname(".heex") |> output()
        String.ends_with?(path, ".md") -> Path.rootname(path, ".md") <> ".html"
        Enum.any?(~w(html shtml xml json txt js css ico), &String.ends_with?(path, ".#{&1}")) -> path
      end

    if Keyword.get(opts, :basename, true) do
      Path.basename(rootname)
    else
      rootname
    end
  end

  def canonical(path) do
    path
    |> output(basename: false)
    |> ensure_prefix("/")
    |> strip_suffix(".html")
  end

  def outdated?(dest, src) do
    with {:ok, dest} <- File.stat(dest),
         {:ok, src} <- File.stat(src) do
      src.mtime > dest.mtime
    else
      _ -> true
    end
  end

  def outdated_by?(path, days: days) do
    case File.stat(path) do
      {:ok, stat} ->
        mtime = :calendar.datetime_to_gregorian_seconds(stat.mtime)
        now = :calendar.datetime_to_gregorian_seconds(:calendar.universal_time())

        now - mtime > days * 86400

      {:error, _} ->
        true
    end
  end

  defp ensure_prefix(str, prefix) do
    if String.starts_with?(str, prefix) do
      str
    else
      prefix <> str
    end
  end

  defp strip_suffix(str, suffix) do
    String.replace_suffix(str, suffix, "")
  end
end
