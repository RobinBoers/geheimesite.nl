defmodule Blog do
  @moduledoc false
  use Vygotsky.Builder

  posts =
    for path <- glob("*.md") do
      @external_resource path

      {frontmatter, _} = path |> File.read!() |> VEEx.parse_frontmatter()

      %{
        slug: Path.basename(path, ".md"),
        path: "/blog/#{output(path)}",
        title: Map.fetch!(frontmatter, :title),
        date: Map.fetch!(frontmatter, :date),
        content: VEEx.render_template!(path, braces: false),
        favorite: Map.get(frontmatter, :favorite, false),
        rss_only: Map.get(frontmatter, :rss_only, false),
        language: Map.get(frontmatter, :language, "en")
      }
    end

  @posts Enum.sort_by(posts, & &1.date, {:desc, Date})
  def list_posts, do: @posts
end