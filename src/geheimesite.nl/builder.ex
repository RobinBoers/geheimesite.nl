defmodule Personal do
  @moduledoc false
  use Vygotsky.Builder

  copy_through "Caddyfile"
  copy_through "favicon.ico"

  pages =
    for path <- glob("*.html.{heex,eex}") do
      @external_resource path
      {path, register_dependencies!(path)}
    end

  async {path, embeds} <- pages, load: [Blog] do
    dest = target(path)

    # The blog index depends on Blog.list_posts, so should always regenerate.
    # And blogroll should be regenerated if not fetched for more than a day.
    if outdated?(dest, path) or
         Enum.any?(embeds, &outdated?(dest, &1)) or
         Path.basename(path) == "blog.html.heex" or
         (Path.basename(path) == "blogroll.html.heex" and outdated_by?(dest, days: 1)) do
      File.write!(dest, VEEx.render_template!(path))
    end
  end

  # Same goes for the blog feeds.
  async path <- glob("*.{xml,json}.eex"), load: [Blog, Git] do
    File.write!(target(path), VEEx.render_template!(path))
  end

  # Rebuild this module if one of these templates change.
  @entry_layout Application.app_dir(:vygotsky, "lib/layouts/entry.html.heex")
  @article_layout Application.app_dir(:vygotsky, "lib/layouts/article.html.heex")

  @external_resource @entry_layout
  @external_resource @article_layout

  async path <- glob("*.md.heex") do
    dest = target(path)

    if outdated?(dest, path) or outdated?(dest, @article_layout) do
      File.write!(dest, VEEx.render_template!(path, layout: :article))
    end
  end

  for path <- glob("*.txt"), Path.basename(path) != "robots.txt" do
    @external_resource path
    @dest target(path)

    if outdated?(@dest, path) do
      File.cp!(path, @dest)
    end
  end

  @autoconfig source("autoconfig.xml")
  @dest target(".well-known/autoconfig/mail/config-v1.1.xml", basename: false)
  @external_resource @autoconfig

  @dest |> Path.dirname() |> dbg() |> File.mkdir_p!()

  if outdated?(@dest, @autoconfig) do
    File.cp!(@autoconfig, @dest)
  end

  @robots source("robots.txt")
  @dest target("robots.txt")
  @external_resource @robots

  message =
    @robots
    |> File.read!()
    |> String.split("\n")
    |> Enum.map(&"# #{&1}")
    |> Enum.join("\n")

  if outdated_by?(@dest, days: 1) do
    File.write!(@dest, message <> "\n\n" <> DarkVisitors.agents())
  end

  for {path, build} <- CDN.stylesheets() do
    @external_resource path
    @dest target(build)

    if outdated?(@dest, build) do
      File.cp!(build, @dest)
    end
  end

  [@dist, "blog"] |> Path.join() |> File.mkdir_p!()

  async entry <- Blog.list_posts(), resource: entry.source do
    dest = target(entry.path, basename: false)

    if outdated?(dest, entry.source) or outdated?(dest, @entry_layout) do
      File.write!(dest, VEEx.render_layout!(:entry, entry.content, entry))
    end
  end
end