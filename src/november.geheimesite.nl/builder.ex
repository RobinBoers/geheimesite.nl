defmodule November do
  @moduledoc false
  use Vygotsky.Builder

  for code <- 400..599 do
    @dest target("#{code}.shtml")
    File.write!(@dest, VEEx.render_layout!(:bsod, "", %{code: code}))
  end
end
