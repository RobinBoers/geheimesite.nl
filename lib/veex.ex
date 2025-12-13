defmodule VEEx do
  @moduledoc """
  VEEx is a unified HTML & Markdown templating renderer
  based on `EEx` and `Phoenix.LiveView.HTMLEngine`.
  """

  import Phoenix.HTML

  defmacro render_template!(path, opts) do
    quote do
      source = File.read!(unquote(path))

      mdex_opts = [
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

      {frontmatter, source} = unquote(__MODULE__).parse(source)

      source =
        if String.ends_with?(unquote(path), ".md.heex") do
          source
          |> MDEx.to_html!(mdex_opts)
          |> unquote(__MODULE__).unescape()
          |> IO.iodata_to_binary()
        else
          source
        end

      quoted =
        EEx.compile_string(source,
          engine: Phoenix.LiveView.TagEngine,
          file: unquote(path),
          source: source,
          tag_handler: Phoenix.LiveView.HTMLEngine,
          caller: __ENV__
        )

      path = "/" <> Path.relative_to(unquote(path), __DIR__)
      defaults = %{host: @host, path: path, now: DateTime.utc_now(), language: config!(:language)}
      assigns =  Map.merge(defaults, frontmatter)
      {rendered, _} = Code.eval_quoted(quoted, [assigns: assigns], __ENV__)
      content = Phoenix.HTML.Safe.to_iodata(rendered)

      if layout = unquote(opts)[:layout] do
        assigns
        |> Map.put(:inner_content, raw(content))
        |> layout.()
        |> Phoenix.HTML.Safe.to_iodata()
      else
        content
      end
    end
  end

  defmacro render_template!(path) do
    quote do
      unquote(__MODULE__).render_template!(unquote(path), [])
    end
  end

  @doc false
  def parse(content) do
    case Regex.run(~r/^---\n(.*?)\n---\n(.*)$/s, content) do
      [_, yaml, rest] -> {YAML.parse!(yaml), rest}
      _ -> {%{}, content}
    end
  end

  @doc false
  def unescape(content) do
    ~r/(<pre.*?<\/pre>)/s
    |> Regex.split(content, include_captures: true)
    |> Enum.map_join(fn
      "<pre" <> _ = part -> part
      part -> HtmlEntities.decode(part)
    end)
  end
end