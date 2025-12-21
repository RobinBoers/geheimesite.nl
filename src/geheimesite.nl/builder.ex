defmodule Personal do
  @moduledoc false
  use Vygotsky.Builder

  for path <- glob("*.html.{heex,eex}") do
    @external_resource path
    @dest Path.join(@dist, output(path))

    # The blog index depends on Blog.list_posts, so should always regenerate.
    # And blogroll should be regenerated if not fetched for more than a day.
    if outdated?(@dest, path) or
         Path.basename(path) == "blog.html.heex" or
         (Path.basename(path) == "blogroll.html.heex" and outdated_by?(@dest, days: 1)) do
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

  for path <- glob("*.txt"), Path.basename(path) != "robots.txt" do
    @external_resource path
    @dest Path.join(@dist, output(path))

    if outdated?(@dest, path) do
      File.cp!(path, @dest)
    end
  end

  @robots file("robots.txt")
  @external_resource @robots

  message =
    @robots
    |> File.read!()
    |> String.split("\n")
    |> Enum.map(&"# #{&1}")
    |> Enum.join("\n")

  @dest Path.join(@dist, "robots.txt")

  if outdated_by?(@dest, days: 1) do
    File.write!(@dest, message <> "\n\n" <> DarkVisitors.agents())
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