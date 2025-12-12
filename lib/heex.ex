defmodule HEEx do
  @moduledoc false

  defmacro render_template!(path, assigns) do
    quote do
      source = File.read!(unquote(path))
      
      quoted = EEx.compile_string(source,
        engine: Phoenix.LiveView.TagEngine,
        file: unquote(path),
        source: source,
        tag_handler: Phoenix.LiveView.HTMLEngine,
        caller: __ENV__
      )

      assigns = Map.merge(%{
        host: @host,
        path: "/" <> Path.relative_to(unquote(path), __DIR__),
        now: DateTime.utc_now()
      }, unquote(assigns))
      
      {rendered, _} = Code.eval_quoted(quoted, [assigns: assigns], __ENV__)
      Phoenix.HTML.Safe.to_iodata(rendered)
    end
  end
end