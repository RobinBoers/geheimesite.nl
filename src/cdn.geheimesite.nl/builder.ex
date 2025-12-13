defmodule CDN do
  @moduledoc false
  use Vygotsky.Builder

  @stylesheets (
    for path <- glob("*.css") do
      @external_resource path

      @dest Path.join(@dist, Path.basename(path))
      sh!(["postcss", path, "-o", @dest])

      @dest
    end)

   def stylesheets, do: @stylesheets
end
