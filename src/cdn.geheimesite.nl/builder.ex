defmodule CDN do
  @moduledoc false
  use Vygotsky.Builder

  @caddyfile file("Caddyfile")
  @external_resource @caddyfile

  @dest Path.join(@dist, "Caddyfile")

  if outdated?(@dest, @caddyfile) do
    File.cp!(@caddyfile, @dest)
  end

  @stylesheets (
    for path <- glob("*.css") do
      @external_resource path
      @dest Path.join(@dist, output(path))

      if outdated?(@dest, path) do
        sh!(["lightningcss", "--minify", "--bundle", "--targets", "defaults", path, "-o", @dest])
      end

      @dest
    end)

   def stylesheets, do: @stylesheets
end
