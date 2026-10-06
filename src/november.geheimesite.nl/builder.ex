defmodule November do
  @moduledoc false
  use Vygotsky.Builder

  Code.ensure_compiled!(November.REPL)
  Vycorn.await!(source("repl.ex"))

  @vycorn Vycorn.output()

  File.mkdir_p!(target("wasm"))

  for file <- ~w(bundle.avm bundle.avm.gz) do
    File.cp!(Path.join(@vycorn, file), target(["wasm", file], basename: false))
  end

  copy_through "Caddyfile"
  copy_through "index.html"

  @node_modules source("node_modules")
  @assets glob("**/*.{js,css,json}", exclude: @node_modules)
  @count length(@assets)

  for path <- @assets do
    @external_resource path
  end

  def __mix_recompile__? do
    assets = glob("**/*.{js,css,json}", exclude: @node_modules)
    super() or length(assets) != @count
  end

  sh!("npm", [
    "exec",
    "--prefix",
    __DIR__,
    "--",
    "esbuild",
    source("index.js"),
    "--bundle",
    "--format=esm",
    "--sourcemap",
    "--outfile=#{target("index.js")}"
  ])

  @runtime Path.join(@node_modules, "@swmansion/popcorn/dist")

  for file <- ~w(iframe.mjs AtomVM.mjs AtomVM.wasm) do
    File.cp!(Path.join(@runtime, file), target(file))
  end

  for code <- 400..599 do
    @dest target("#{code}.shtml")
    File.write!(@dest, VEEx.render_layout!(:bsod, "", %{code: code}))
  end
end
