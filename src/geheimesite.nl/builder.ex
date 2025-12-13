defmodule Personal do
  @moduledoc false
  use Vygotsky.Builder

  for path <- glob("*.html.heex") do
    @external_resource path

    @dest Path.join(@dist, output(path))
    File.write!(@dest, VEEx.render_template!(path))
  end

  for path <- glob("*.md.heex") do
    @external_resource path

    @dest Path.join(@dist, output(path))
    File.write!(@dest, VEEx.render_template!(path, layout: :article))
  end

  for path <- glob("*.txt") do
    @external_resource path
    File.cp!(path, Path.join(@dist, output(path)))
  end

  @dist |> Path.join("blog") |> File.mkdir_p!()

  for entry <- Blog.list_posts() do
    @dest Path.join([@dist, entry.path])
    File.write!(@dest, VEEx.render_layout!(:entry, entry.content, entry))
  end
end