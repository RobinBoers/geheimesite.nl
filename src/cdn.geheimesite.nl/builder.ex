defmodule CDN do
  @moduledoc false
  use Vygotsky.Builder

  copy_through "Caddyfile"
  copy_through "index.html"

  stylesheets =
    async path <- glob("*.css"), into: %{} do
      dest = target(path)

      if outdated?(dest, path) do
        sh!(["lightningcss", "--minify", "--bundle", "--targets", "defaults", path, "-o", dest])
      end

      {path, dest}
    end

  @stylesheets stylesheets
  def stylesheets, do: @stylesheets
end
