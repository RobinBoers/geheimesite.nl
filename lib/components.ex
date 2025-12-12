defmodule Components do
  @moduledoc false
  use Phoenix.Component

  attr :href, :string, required: true
  attr :rest, :global
  slot :inner_block, required: true

  @doc """
  Title link.
  """
  def ta(assigns) do
    ~H"""
    <b {@rest}><a href={@href}>{render_slot(@inner_block)}</a></b>
    """
  end

  attr :href, :string, required: true
  attr :rest, :global
  slot :inner_block, required: true

  @doc """
  List item link.
  """
  def la(assigns) do
    ~H"""
    <li {@rest}><a href={@href}>{render_slot(@inner_block)}</a></li>
    """
  end

  attr :src, :string, required: true
  attr :alt, :string, default: ""
  attr :rest, :global

  @doc """
  Animated old-school 88x31 button.
  """
  def badge(assigns) do
    ~H"""
    <img src={@src} alt={@alt} width="88" height="31" {@rest} />
    """
  end
end