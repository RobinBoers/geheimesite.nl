defmodule YAML do
  @moduledoc false
  
  @opts [str_node_as_binary: true]

  def parse!(source) do
    source
    |> :yamerl_constr.string(@opts)
    |> hd()
    |> cast()
  end

  defp cast(list) when is_list(list) do
    if proplist?(list) do
      Map.new(list, fn {k, v} ->
        {String.to_atom(to_string(k)), cast(v)}
      end)
    else
      Enum.map(list, &cast/1)
    end
  end

  defp cast(value) when is_binary(value) do
    case Date.from_iso8601(value) do
      {:ok, date} -> date
      {:error, _} -> value
    end
  end

  defp cast(value) do
    value # fallthrough case
  end

  defp proplist?([{_, _} | _]), do: true
  defp proplist?(_), do: false
end