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

  @doc """
  Rewrites relative URLs in HTML to absolute URLs.

  - Root-relative paths (`/path`) are prefixed with the scheme and host from `page_url`.
  - Fragment-only refs (`#anchor`) are prefixed with the full `page_url`.
  - Protocol-relative (`//`) and already-absolute URLs are left untouched.

  """
  @spec absolutize(binary(), binary()) :: binary()
  def absolutize(html, page_url) when is_binary(html) do
    %URI{scheme: scheme, host: host} = URI.parse(page_url)
    base = "#{scheme}://#{host}"

    html
    |> then(&Regex.replace(~r/(href|src)="\/(?!\/)/, &1, fn _, attr -> ~s|#{attr}="#{base}/| end))
    |> then(&Regex.replace(~r/(href)="#/, &1, fn _, attr -> ~s|#{attr}="#{page_url}#| end))
  end
end