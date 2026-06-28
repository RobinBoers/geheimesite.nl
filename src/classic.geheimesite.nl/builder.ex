defmodule Classic do
  @moduledoc false
  use Vygotsky.Builder

  for path <- glob("*.html.heex") do
    @external_resource path
    @dest target(path)

    if outdated?(@dest, path) do
      File.write!(@dest, VEEx.render_template!(path))
    end
  end
end