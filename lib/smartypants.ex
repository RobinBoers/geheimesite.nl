defmodule Smartypants do
  @moduledoc """
  Transforms plain ASCII punctuation into typographically correct HTML entities.

  Handles quotes, dashes, and ellipses while preserving content inside
  `<pre>`, `<code>`, `<kbd>`, `<script>`, `<style>`, and `<math>` tags.
  """

  @skip_tags ~r/<(\/?)(?:pre|code|kbd|script|style|math)[^>]*>/i
  @tag_pattern ~r/<!--[\s\S]*?-->|<\?.*?\?>|<[^>]*>/

  # Precompiled regexes for quote transformation
  @punct_class "[!\"#\\$%'()*+,-./:;<=>?@\\[\\\\\\]^_`{|}~]"
  @close_class "[^\\\\ \\t\\r\\n\\[{(\\-]"
  @not_close_class "[\\\\ \\t\\r\\n\\[{(\\-]"
  @dec_dashes "&#8211;|&#8212;"

  @quote_open_punct_single Regex.compile!("^'(?=#{@punct_class}\\B)")
  @quote_open_punct_double Regex.compile!("^\"(?=#{@punct_class}\\B)")
  @quote_double_set_1 ~r/"'(?=\w)/
  @quote_double_set_2 ~r/'"(?=\w)/
  @quote_decade ~r/'(?=\d\d)/
  @quote_opening_single Regex.compile!("([\\s]|&nbsp;|--|&[mn]dash;|#{@dec_dashes}|&#x201[34];)'(?=\\w)")
  @quote_closing_single_1 Regex.compile!("(#{@close_class})'")
  @quote_closing_single_2 Regex.compile!("(#{@not_close_class}?)'(?=\\s|s\\b)")
  @quote_opening_double Regex.compile!("([\\s]|&nbsp;|--|&[mn]dash;|#{@dec_dashes}|&#x201[34];)\"(?=\\w)")
  @quote_closing_double_1 Regex.compile!("(#{@close_class})\"")
  @quote_closing_double_2 Regex.compile!("(#{@not_close_class}?)\"(?=\\s)")

  @doc """
  Applies smartypants transformations to HTML content.

  ## Transformations

  - `--` → em-dash (&#8212;)
  - `...` → ellipsis (&#8230;)
  - `"word"` → curly double quotes
  - `'word'` → curly single quotes

  ## Examples

      iex> Smartypants.convert(~s(He said "hello" -- it was nice...))
      ~s(He said &#8220;hello&#8221; &#8212; it was nice&#8230;)

  """
  def convert(html) when is_binary(html) do
    state = %{in_pre: false, prev_char: ""}
    html |> tokenize() |> process_tokens(state)
  end

  defp tokenize(text) do
    @tag_pattern
    |> Regex.split(text, include_captures: true, trim: true)
    |> Enum.map(fn segment ->
      if String.starts_with?(segment, "<") do
        {:tag, segment}
      else
        {:text, segment}
      end
    end)
  end

  defp process_tokens(tokens, state) do
    process_tokens(tokens, state, [])
  end

  defp process_tokens([], _state, acc), do: Enum.reverse(acc)

  defp process_tokens([{:tag, tag} | rest], state, acc) do
    new_state = update_pre_state(tag, state)
    process_tokens(rest, new_state, [tag | acc])
  end

  defp process_tokens([{:text, text} | rest], state, acc) do
    last_char = String.last(text) || ""

    transformed =
      if state.in_pre do
        text
      else
        text
        |> process_escapes()
        |> educate_dashes()
        |> educate_ellipses()
        |> educate_quotes(state.prev_char)
      end

    new_state = %{state | prev_char: last_char}
    process_tokens(rest, new_state, [transformed | acc])
  end

  defp update_pre_state(tag, state) do
    case Regex.run(@skip_tags, tag) do
      [_, "/"] -> %{state | in_pre: false}
      [_, _] -> %{state | in_pre: true}
      nil -> state
    end
  end

  defp process_escapes(text) do
    text
    |> String.replace("\\\\", "&#92;")
    |> String.replace(~s(\\"), "&#34;")
    |> String.replace(~s(\\'), "&#39;")
    |> String.replace("\\.", "&#46;")
    |> String.replace("\\-", "&#45;")
    |> String.replace("\\`", "&#96;")
  end

  defp educate_dashes(text) do
    String.replace(text, "--", "&#8212;")
  end

  defp educate_ellipses(text) do
    text
    |> String.replace("...", "&#8230;")
    |> String.replace(". . .", "&#8230;")
  end

  defp educate_quotes(text, prev_char) do
    cond do
      text == ~s(')-> if prev_char =~ ~r/\S/, do: "&#8217;", else: "&#8216;"
      text == ~s(") -> if prev_char =~ ~r/\S/, do: "&#8221;", else: "&#8220;"
      true -> transform_quotes(text)
    end
  end

  defp transform_quotes(text) do
    text
    |> String.replace(@quote_open_punct_single, "&#8217;")
    |> String.replace(@quote_open_punct_double, "&#8221;")
    |> String.replace(@quote_double_set_1, "&#8220;&#8216;")
    |> String.replace(@quote_double_set_2, "&#8216;&#8220;")
    |> String.replace(@quote_decade, "&#8217;")
    |> String.replace(@quote_opening_single, "\\1&#8216;")
    |> String.replace(@quote_closing_single_1, "\\1&#8217;")
    |> String.replace(@quote_closing_single_2, "\\1&#8217;")
    |> String.replace(~s('), "&#8216;")
    |> String.replace(@quote_opening_double, "\\1&#8220;")
    |> String.replace(@quote_closing_double_1, "\\1&#8221;")
    |> String.replace(@quote_closing_double_2, "\\1&#8221;")
    |> String.replace(~s("), "&#8220;")
  end
end
