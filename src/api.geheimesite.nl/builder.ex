defmodule API do
  @moduledoc false
  use Vygotsky.Builder

  copy_through "index.html"

  # TODO(robin): the thing below is an ugly hack
  for path <- glob("*.js") do
    copy_through Path.basename(path)
  end
end
