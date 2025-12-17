defmodule Personal do
  @moduledoc false
  use Vygotsky.Builder

  for path <- glob("*.html.{heex,eex}") do
    @external_resource path
    @dest Path.join(@dist, output(path))

    # blog.html.heex depends on Blog.list_posts, always regenerate
    if String.ends_with?(path, "blog.html.heex") do
      File.write!(@dest, VEEx.render_template!(path))
    else
      outdated?(@dest, path) && File.write!(@dest, VEEx.render_template!(path))
    end
  end

  for path <- glob("*.xml.eex") do
    @external_resource path

    @dest Path.join(@dist, output(path))
    File.write!(@dest, VEEx.render_template!(path))
  end

  for path <- glob("*.md.heex") do
    @external_resource path

    @dest Path.join(@dist, output(path))
    outdated?(@dest, path) && File.write!(@dest, VEEx.render_template!(path, layout: :article))
  end

  for path <- glob("*.txt") do
    @external_resource path

    @dest Path.join(@dist, output(path))
    outdated?(@dest, path) && File.cp!(path, @dest)
  end

  for build <- CDN.stylesheets() do
    @dest Path.join(@dist, output(build))
    outdated?(@dest, build) && File.cp!(build, @dest)
  end

  @dist |> Path.join("blog") |> File.mkdir_p!()

  for entry <- Blog.list_posts() do
    @dest Path.join(@dist, entry.path)
    outdated?(@dest, entry.source) && File.write!(@dest, VEEx.render_layout!(:entry, entry.content, entry))
  end
end