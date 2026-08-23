defmodule Novsh.Application do
  @moduledoc false
  use Application

  @impl true
  def start(_type, _args) do
    children = [
      Novsh.Worker
    ]

    opts = [strategy: :one_for_one, name: Novsh.Supervisor]
    Supervisor.start_link(children, opts)
  end
end
