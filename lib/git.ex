defmodule Git do
  @moduledoc false

  def lastmod(path) do
    case System.cmd("git", ["log", "-1", "--format=%cI", "--", path]) do
      {output, 0} when output != "" -> String.trim(output)
      _ -> DateTime.utc_now() |> DateTime.to_iso8601()
    end
  end

  def changefreq(path) do
    with {log, 0} <- System.cmd("git", ["log", "--format=%ct", "--", path]),
         commits <- log |> String.trim() |> String.split("\n", trim: true),
         true <- length(commits) > 1 do
      timestamps = Enum.map(commits, &String.to_integer/1)
      first = Enum.min(timestamps)
      last = Enum.max(timestamps)
      days = div(last - first, 86400)

      case div(days, max(length(commits) - 1, 1)) do
        d when d < 1 -> "daily"
        d when d < 7 -> "weekly"
        d when d < 30 -> "monthly"
        _ -> "yearly"
      end
    else
      _ -> "monthly"
    end
  end
end
