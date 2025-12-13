defmodule Classic do
  @moduledoc false
  use Vygotsky.Builder

  for path <- glob("*.html.heex") do
    @external_resource path

    @rendered VEEx.render_template!(path)
    @dest Path.join(@dist, Path.basename(path, ".heex"))

    File.write!(@dest, @rendered)
  end
end