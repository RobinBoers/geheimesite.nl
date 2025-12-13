defmodule YAML do
  @moduledoc false

  def parse!(source) do
    source
    |> :yamerl_constr.string()
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

  defp cast(value), do: value

  defp proplist?([{_, _} | _]), do: true
  defp proplist?(_), do: false
end