defmodule Novsh.REPL do
  @moduledoc false
  use GenServer

  alias Signo.Env
  alias Signo.StdLib
  alias Signo.Logger
  alias Signo.Position

  def start_link(opts) do
    GenServer.start_link(__MODULE__, opts, name: __MODULE__)
  end

  defp erlang_info, do: :erlang.system_info(:system_version)
  defp elixir_info, do: "Elixir/#{System.version()}"

  @impl true
  def init(_opts) do
    IO.puts(erlang_info())
    IO.puts("Interactive Signo v#{Signo.version()} (#{elixir_info()})")

    Popcorn.Wasm.ready(__MODULE__)

    {:ok, %{ln: 1, env: StdLib.kernel() |> Env.new()}}
  end

  @impl true
  def handle_info(message, state) do
    {:wasm_call, source, promise} =
      Popcorn.Wasm.parse_message!(message)

    state = eval(source, state)

    Popcorn.Wasm.resolve(state.ln, promise)

    {:noreply, state}
  end

  defp eval(source, state) do
    pos = Position.new(:nofile, state.ln)

    {value, env} =
      source
      |> Signo.lex!(pos)
      |> Signo.parse!()
      |> Signo.evaluate!(state.env)

    Logger.log_expression(value)
    %{state | env: env, ln: state.ln + 1}
  rescue
    exception ->
      Logger.log_error(exception)
      state
  end
end
