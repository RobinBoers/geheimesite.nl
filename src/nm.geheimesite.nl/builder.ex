defmodule Netmap do
  @moduledoc false
  use Vygotsky.Builder

  for path <- glob("*.html.heex") do
    @external_resource path

    @dest Path.join(@dist, output(path))
    outdated?(@dest, path) && File.write!(@dest, VEEx.render_template!(path))
  end
end