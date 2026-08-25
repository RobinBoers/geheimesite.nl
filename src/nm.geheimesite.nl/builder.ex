defmodule Netmap do
  @moduledoc false
  use Vygotsky.Builder

  copy_through "domains.json"

  @netmap Application.app_dir(:vygotsky, "priv/netmap.json")
  @external_resource @netmap

  for path <- glob("*.html.heex") do
    @external_resource path
    @dest target(path)

    if outdated?(@dest, path) or outdated?(@dest, @netmap) do
      File.write!(@dest, VEEx.render_template!(path))
    end
  end
end
