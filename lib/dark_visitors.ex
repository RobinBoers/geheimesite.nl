defmodule DarkVisitors do
  @moduledoc false

  @api_base "https://api.darkvisitors.com/robots-txts"
  @api_token "f2e34737-6978-4eb4-a9a1-13dc33df695c"

  @agent_types [
    "AI Agent",
    "AI Assistant",
    "AI Data Scraper",
    "AI Search Crawler",
    "Headless Agent",
    "Intelligence Gatherer",
    "Scraper",
    "SEO Crawler",
    "Search Engine Crawler",
    "Undocumented AI Agent",
    "Uncategorized"
  ]

  def agents do
    # This is a very bad idea. But so is this enture project.
    Application.ensure_all_started(:req)

    %Req.Response{body: response} =
      Req.post!(@api_base,
        headers: [{"authorization", "Bearer #{@api_token}"}],
        json: %{agent_types: @agent_types}
      )

    response
    |> String.split("\n")
    |> Enum.reject(&String.match?(&1, ~r/^\s*(#|$)/))
    |> Enum.join("\n")
  end
end