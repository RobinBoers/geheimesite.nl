defmodule CDN do
  @moduledoc false
  use Vygotsky.Builder

  for path <- glob("*.css") do
    @external_resource path

    @dest Path.join(@dist, Path.basename(path))
    sh!(["postcss", path, "-o", @dest])
  end
end
