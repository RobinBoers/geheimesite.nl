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

  # This black-magic fuckery ensures the current module is
  # recompiled if there are new files in `icons` or `shared`.

  @priv Application.app_dir(:vygotsky, "priv/**/*")
  @count length(Path.wildcard(@priv))

  def __mix_recompile__? do
    length(Path.wildcard(@priv)) != @count
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

  def canonical(path) do
    path
    |> output(basename: false)
    |> ensure_prefix("/")
    |> strip_suffix(".html")
  end

  def output(path, opts \\ []) do
    rootname =
      cond do
        String.ends_with?(path, ".eex") -> path |> Path.rootname(".eex") |> output()
        String.ends_with?(path, ".heex") -> path |> Path.rootname(".heex") |> output()
        String.ends_with?(path, ".md") -> Path.rootname(path, ".md") <> ".html"
        Enum.any?(~w(html xml txt css), &String.ends_with?(path, ".#{&1}")) -> path
      end

    if Keyword.get(opts, :basename, true) do
      Path.basename(rootname)
    else
      rootname
    end
  end

  def outdated?(dest, src) do
    with {:ok, dest} <- File.stat(dest),
         {:ok, src} <- File.stat(src) do
      src.mtime > dest.mtime
    else
      _ -> true
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
