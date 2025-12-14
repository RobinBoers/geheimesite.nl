defmodule VEEx do
  @moduledoc """
  VEEx is a unified HTML & Markdown templating renderer
  based on `EEx` and `Phoenix.LiveView.HTMLEngine`.
  """

  import Phoenix.HTML

  @opts [
    extension: [
      strikethrough: true,
      tagfilter: true,
      table: true,
      tasklist: true,
      footnotes: true,
      shortcodes: true
    ],
    parse: [
      relaxed_tasklist_matching: true
    ],
    render: [
      unsafe_: true
    ]
  ]

  @doc false
  defmacro context do
    quote do
      %{host: @host, now: DateTime.utc_now(), language: config!(:language)}
    end
  end

  @doc """
  Renders a template from disk.

  - `.html.heex` is parsed as HTML.
  - `.md.heex` is parsed as Markdown.

  ## Options

  - `:layout`, renders the template within the given
    layout (see `Vygotsky`), using `render_layout!/3`.

  - `:braces`, if `false`, wraps the entire template with
    the `phx-no-curly-interpolation` attribute.

  """
  defmacro render_template!(path, opts) do
    quote do
      source = File.read!(unquote(path))

      {frontmatter, source} =
        unquote(__MODULE__).parse_frontmatter(source)

      source =
        if String.contains?(unquote(path), ".md") do
          source
          |> MDEx.to_html!(unquote(@opts))
          |> unquote(__MODULE__).unescape_markdown()
          |> IO.iodata_to_binary()
        else
          source
        end

      source =
        if unquote(opts)[:braces] == false do
          "<div phx-no-curly-interpolation>#{source}</div>"
        else
          source
        end

      quoted =
        if String.contains?(unquote(path), ".xml") do
          EEx.compile_string(source,
            engine: EEx.SmartEngine,
            file: unquote(path),
            line: 1
          )
        else
          EEx.compile_string(source,
            engine: Phoenix.LiveView.TagEngine,
            file: unquote(path),
            source: source,
            tag_handler: Phoenix.LiveView.HTMLEngine,
            caller: __ENV__
          )
        end

      path = "/" <> Path.relative_to(unquote(path), __DIR__)

      assigns = 
        unquote(__MODULE__).context()
        |> Map.put(:path, path)
        |> Map.merge(frontmatter)

      {rendered, _} = Code.eval_quoted(quoted, [assigns: assigns], __ENV__)

      content =
        with %Phoenix.LiveView.Rendered{} <- rendered do
          Phoenix.HTML.Safe.to_iodata(rendered)
        end

      if layout = unquote(opts)[:layout] do
        unquote(__MODULE__).render_layout!(layout, content, assigns)
      else
        content
        |> unquote(__MODULE__).replace_shortcodes()
        |> unquote(__MODULE__).canonicalize_urls()
      end
    end
  end

  @doc """
  Same as `render_template!/1`, but with defaults.
  """
  defmacro render_template!(path) do
    quote do
      unquote(__MODULE__).render_template!(unquote(path), [])
    end
  end

  @doc """
  Renders a layout.

  A layout is a component function in `Vygotsky`, typically
  from the `layouts` directory, taking an `inner_content` assign.
  """
  defmacro render_layout!(layout, content, assigns) do
    quote do
      assigns =
        unquote(__MODULE__).context()
        |> Map.merge(unquote(assigns))
        |> Map.put(:inner_content, raw(unquote(content)))

      apply(Vygotsky, unquote(layout), [assigns])
      |> Phoenix.HTML.Safe.to_iodata()
      |> unquote(__MODULE__).replace_shortcodes()
      |> unquote(__MODULE__).canonicalize_urls()
    end
  end

  @doc """
  Same as `render_layout!/3`, but with defaults.
  """
  defmacro render_layout!(layout, content) do
    quote do
      unquote(__MODULE__).render_layout!(unquote(layout), unquote(content), %{})
    end
  end

  @doc false
  def parse_frontmatter(content) do
    case Regex.run(~r/^---\n(.*?)\n---\n(.*)$/s, content) do
      [_, yaml, rest] -> {YAML.parse!(yaml), rest}
      _ -> {%{}, content}
    end
  end

  @doc false
  def unescape_markdown(content) do
    ~r/(<pre.*?<\/pre>)/s
    |> Regex.split(content, include_captures: true)
    |> Enum.map_join(fn
      "<pre" <> _ = part -> part
      part -> HtmlEntities.decode(part)
    end)
  end

  @doc false
  def replace_shortcodes(content) when is_list(content) do
    content |> IO.iodata_to_binary() |> replace_shortcodes()
  end

  @shortcodes Vygotsky.config!(:shortcodes)

  @doc false
  def replace_shortcodes(content) when is_binary(content) do
    for {find, replace} <- @shortcodes, reduce: content do
      content -> String.replace(content, find, replace)
    end
  end

  @doc false
  def canonicalize_urls(content) when is_list(content) do
    content |> IO.iodata_to_binary() |> canonicalize_urls()
  end

  @doc false
  def canonicalize_urls(content) when is_binary(content) do
    String.replace(content, "=\"//", "=\"https://")
  end
end