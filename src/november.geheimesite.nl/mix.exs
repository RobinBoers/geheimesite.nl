defmodule Novsh.MixProject do
  use Mix.Project

  def project do
    [
      app: :novsh,
      version: "0.1.0",
      elixir: "~> 1.17",
      start_permanent: Mix.env() == :prod,
      deps: deps()
    ]
  end

  def application do
    [
      extra_applications: [:logger],
      mod: {Novsh.Application, []}
    ]
  end

  defp deps do
    [
      {:signo, "~> 0.0.2"},
      {:popcorn, "~> 0.3.3"}
    ]
  end
end
