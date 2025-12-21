defmodule CDN do
  @moduledoc false
  use Vygotsky.Builder

  @stylesheets (
    for path <- glob("*.css") do
      @external_resource path
      @dest Path.join(@dist, output(path))

      if outdated?(@dest, path) do
        IO.puts("Building #{Path.basename(path)}")
        sh!(["postcss", path, "-o", @dest])
      end

      @dest
    end)

   def stylesheets, do: @stylesheets
end
