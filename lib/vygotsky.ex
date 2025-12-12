defmodule Vygotsky do
  @moduledoc false

  defmacro __using__(_) do
    quote do
      import Vygotsky
      use Phoenix.Component
    end
  end

  use Phoenix.Component
  embed_templates "templates/*"

  @icons Application.app_dir(:vygotsky, "priv/icons/*.svg")
  @shared Application.app_dir(:vygotsky, "priv/shared/*.html")
  @refs Application.app_dir(:vygotsky, "priv/refs/*.bib")

  for path <- Path.wildcard(@icons) do
    @external_resource path

    @icon Path.basename(path)
    @contents File.read!(path)

    def icon(%{name: @icon} = assigns) do
      assigns = assign(assigns, :inner, @contents)
      ~H"#{@inner}"
    end
  end

  for path <- Path.wildcard(@shared) do
    @external_resource path

    @name Path.basename(path)
    @contents File.read!(path)

    def embed(%{name: @name} = assigns) do
      assigns = assign(assigns, :inner, @contents)
      ~H"#{@inner}"
    end
  end

  for path <- Path.wildcard(@refs) do
    @external_resource path

    @slug Path.basename(path)
    @apa BibTeX.read!(path)

    def cite(%{refs: @slug} = assigns) do
      assigns = assign(assigns, :apa, @apa)
      ~H"#{@apa}"
    end
  end

  def sh([cmd | args]), do: sh(cmd, args)

  def sh(cmd) when is_binary(cmd) do
    cmd |> String.split(" ") |> sh()
  end

  def sh(cmd, args) do
    case System.shell(cmd, args) do
      {output, 0} -> output
      {error, _} -> raise "#{cmd}: #{error}"
    end
  end

  # This black-magic fuckery ensures the current module is
  # recompiled if there are new files in `icons` or `shared`.

  @priv Application.app_dir(:vygotsky, "priv/**/*")
  @hash :erlang.md5(Path.wildcard(@priv))

  def __mix_recompile__? do
    :erlang.md5(Path.wildcard(@priv)) != @hash
  end
end