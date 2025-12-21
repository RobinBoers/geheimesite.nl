defmodule Personal do
  @moduledoc false
  use Vygotsky.Builder

  for path <- glob("*.html.{heex,eex}") do
    @external_resource path
    @dest Path.join(@dist, output(path))

    # The blog index depends on Blog.list_posts, so should always regenerate.
    if outdated?(@dest, path) or Path.basename(path) == "blog.html.heex" do
      File.write!(@dest, VEEx.render_template!(path))
    end
  end

  for path <- glob("*.{xml,json}.eex") do
    @external_resource path
    @dest Path.join(@dist, output(path))

    # Same goes for the blog feeds.
    File.write!(@dest, VEEx.render_template!(path))
  end

  # Rebuild this module if one of these templates change.
  @entry_layout Application.app_dir(:vygotsky, "lib/layouts/entry.html.heex")
  @article_layout Application.app_dir(:vygotsky, "lib/layouts/article.html.heex")

  @external_resource @entry_layout
  @external_resource @article_layout

  for path <- glob("*.md.heex") do
    @external_resource path
    @dest Path.join(@dist, output(path))

    if outdated?(@dest, path) or outdated?(@dest, @article_layout) do
      File.write!(@dest, VEEx.render_template!(path, layout: :article))
    end
  end

  for path <- glob("*.txt") do
    @external_resource path
    @dest Path.join(@dist, output(path))

    if outdated?(@dest, path) do
      File.cp!(path, @dest)
    end
  end

  for build <- CDN.stylesheets() do
    @dest Path.join(@dist, output(build))

    if outdated?(@dest, build) do
      File.cp!(build, @dest)
    end
  end

  @dist |> Path.join("blog") |> File.mkdir_p!()

  for entry <- Blog.list_posts() do
    @dest Path.join(@dist, entry.path)

    if outdated?(@dest, entry.source) or outdated?(@dest, @entry_layout) do
      File.write!(@dest, VEEx.render_layout!(:entry, entry.content, entry))
    end
  end
end