defmodule Blog do
  @moduledoc false
  use Vygotsky.Builder

  @caddyfile file("Caddyfile")
  @external_resource @caddyfile

  @dest Path.join(@dist, "Caddyfile")

  if outdated?(@dest, @caddyfile) do
    File.cp!(@caddyfile, @dest)
  end

  posts =
    for path <- glob("*.md") do
      @external_resource path

      {frontmatter, _} = path |> File.read!() |> VEEx.parse_frontmatter()

      %{
        source: path,
        slug: Path.basename(path, ".md"),
        path: "/blog/#{output(path)}",
        title: Map.fetch!(frontmatter, :title),
        date: Map.fetch!(frontmatter, :date),
        content: VEEx.render_template!(path, braces: false),
        favorite: Map.get(frontmatter, :favorite, false),
        rssonly: Map.get(frontmatter, :rssonly, false),
        language: Map.get(frontmatter, :language, "en")
      }
    end

  @posts Enum.sort_by(posts, & &1.date, {:desc, Date})
  def list_posts, do: @posts

  @last_modified @posts |> hd() |> Map.get(:date)
  def last_modified, do: @last_modified
end