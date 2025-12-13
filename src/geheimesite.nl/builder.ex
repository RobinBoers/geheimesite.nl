defmodule Personal do
  @moduledoc false
  use Vygotsky.Builder

  for path <- glob("*.html.heex") do
    @external_resource path

    @rendered VEEx.render_template!(path)
    @dest Path.join(@dist, Path.basename(path, ".heex"))

    File.write!(@dest, @rendered)
  end

  for path <- glob("*.md.heex") do
    @external_resource path

    @markdown VEEx.render_template!(path, layout: &article/1)
    @dest Path.join(@dist, Path.basename(path, ".md.heex") <> ".html")

    File.write!(@dest, @markdown)
  end
end