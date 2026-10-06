defmodule November.REPL do
  @moduledoc false
  use GenServer

  alias Signo.Env
  alias Signo.Logger
  alias Signo.Position
  alias Signo.StdLib

  Code.ensure_compiled!(Vycorn)
  @after_compile Vycorn

  @hidden_result :"do not show this result in output"

  def start do
    GenServer.start_link(__MODULE__, [], name: __MODULE__)
  end

  @impl GenServer
  def init(_opts) do
    IO.puts(:erlang.system_info(:system_version))
    IO.puts("Interactive Signo v#{Signo.version()} (Elixir/#{System.version()})")

    Popcorn.Wasm.ready(__MODULE__)

    {:ok, %{ln: 1, env: StdLib.kernel() |> Env.new()}}
  end

  @impl GenServer
  def handle_info(message, state) do
    {:wasm_call, source, promise} = Popcorn.Wasm.parse_message!(message)
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
    maybe_flush_output(value)

    %{state | env: env, ln: state.ln + 1}
  rescue
    exception ->
      Logger.log_error(exception)
      state
  end

  defp maybe_flush_output(%Signo.AST.Atom{value: @hidden_result}), do: IO.puts("")
  defp maybe_flush_output(_value), do: :ok
end
