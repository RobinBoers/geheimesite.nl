defmodule BibTeX do
  @moduledoc false

  @input Application.app_dir(:vygotsky, "priv/refs/header.txt")
  @apa Application.app_dir(:vygotsky, "priv/refs/apa.csl")

  def read!(path, csl \\ @apa) do
    args = [
      @input,
      "--bibliography=#{path}",
      "--csl=#{csl}",
      "--citeproc",
      "-t",
      "html"
    ]

    case System.cmd("pandoc", args, stderr_to_stdout: true) do
      {html, 0} -> cleanup(html)
      {error, _} -> raise "pandoc: #{error}"
    end
  end

  defp cleanup(html) do
    html
    |> remove_container_start()
    |> remove_container_end()
    |> remove_list_role()
    |> use_paragraphs_start()
    |> use_paragraphs_end()
    |> replace_italics()
  end

  defp remove_container_start(html) do
    Regex.replace(~r/<div[^>]*id="refs"[^>]*>.*?<\/div>/s, html, "")
  end

  defp remove_list_role(html) do
    Regex.replace(~r/\s*role="list"/, html, "")
  end

  defp remove_container_end(html) do
    Regex.replace(~r/<\/div>\s*$/, html, "")
  end

  defp use_paragraphs_start(html) do
    Regex.replace(~r/<div id="ref-[^"]*" class="csl-entry"[^>]*>/, html, "<p>")
  end

  defp use_paragraphs_end(html) do
    Regex.replace(~r/<\/div>/, html, "</p>")
  end

  defp replace_italics(html) do
    html
    |> String.replace("<em>", "<i>")
    |> String.replace("</em>", "</i>")
  end
end