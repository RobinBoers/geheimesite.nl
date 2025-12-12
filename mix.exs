defmodule Vygotsky.MixProject do
  use Mix.Project

  def project do
    [
      name: "geheimesite.nl",
      description: "The *.geheimesite.nl webspace.",
      app: :vygotsky,
      version: "0.1.0",
      elixir: "~> 1.18",
      deps: deps(),

      # This project is non-standard because I have opinions.
      config_path: "env.exs",
      deps_path: "_deps",
      elixirc_paths: ["lib", "src"]
    ]
  end

  def application do
    [extra_applications: [:logger]]
  end

  defp deps do
    [
      {:earmark, "~> 1.4"},
      {:phoenix_live_view, "~> 1.1"}
    ]
  end
end
