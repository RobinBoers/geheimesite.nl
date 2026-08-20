defmodule CDN do
  @moduledoc false
  use Vygotsky.Builder

  copy_through "Caddyfile"
  copy_through "index.html"

  stylesheets =
    for path <- glob("*.css") do
      {path, register_dependencies!(path)}
    end

  stylesheets =
    async {path, dependencies} <- stylesheets, into: %{} do
      dest = target(path)

      if outdated?(dest, path) or Enum.any?(dependencies, &outdated?(dest, &1)) do
        sh!(["lightningcss", "--minify", "--bundle", "--targets", "defaults", path, "-o", dest])
      end

      {path, dest}
    end

  @stylesheets stylesheets
  def stylesheets, do: @stylesheets
end
