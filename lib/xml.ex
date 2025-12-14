defmodule XML do
  @moduledoc false

  @doc """
  Escapes a string for safe inclusion in XML.

  Converts:
    - &  -> &amp;
    - <  -> &lt;
    - >  -> &gt;
    - "  -> &quot;
    - '  -> &apos;

  Accepts binaries and returns an escaped binary.
  """
  @spec escape(binary()) :: binary()
  def escape(nil), do: ""

  def escape(string) when is_binary(string) do
    string
    |> String.replace("&", "&amp;")
    |> String.replace("<", "&lt;")
    |> String.replace(">", "&gt;")
    |> String.replace("\"", "&quot;")
    |> String.replace("'", "&apos;")
  end
end