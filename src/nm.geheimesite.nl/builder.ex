defmodule Netmap do
  @moduledoc false
  use Vygotsky.Builder

  copy_through "domains.json"

  for path <- glob("*.html.heex") do
    @external_resource path
    @dest target(path)

    [embed] = register_dependencies!(path)

    if outdated?(@dest, path) or outdated?(@dest, embed) do
      File.write!(@dest, VEEx.render_template!(path))
    end
  end
end