defmodule Classic do
  @moduledoc false
  use Vygotsky.Builder

  @glob __DIR__ <> "/*.html.heex"

  for path <- Path.wildcard(@glob) do
    @external_resource path

    @rendered HEEx.render_template!(path, %{host: @host})
    @dest Path.join(@dist, Path.basename(path, ".heex"))

    File.write!(@dest, @rendered)
  end
end