defmodule API do
  @moduledoc false
  use Vygotsky.Builder

  copy_through "index.html"

  for path <- glob("*.js") do
    copy_through Path.basename(path)
  end
end
