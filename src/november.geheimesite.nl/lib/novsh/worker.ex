defmodule Novsh.Worker do
  @moduledoc false
  use GenServer

  @process_name :november

  def start_link(opts) do
    GenServer.start_link(__MODULE__, opts, name: @process_name)
  end

  @impl true
  def init(opts) do
    Popcorn.Wasm.ready(@process_name)

    IO.puts("hewwo world :3")

    {:ok, opts}
  end
end
