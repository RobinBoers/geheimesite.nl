defmodule Vycorn do
  @moduledoc false

  @source __ENV__.file
  @output Path.join(Mix.Project.build_path(), "vycorn")
  @digest Path.join(@output, ".popcorn_build.digest")

  def output, do: @output

  def __after_compile__(env, bytecode) do
    File.mkdir_p!(@output)

    cook(env.module, bytecode, @output)
    File.write!(@digest, build_digest(env.file))
  end

  def await!(source) do
    await(@digest, build_digest(source), 6000)
  end

  defp await(_marker, _digest, 0) do
    raise "timed out waiting for Popcorn bundle"
  end

  defp await(marker, digest, attempts) do
    if File.read(marker) == {:ok, digest} do
      :ok
    else
      Process.sleep(50)
      await(marker, digest, attempts - 1)
    end
  end

  defp cook(module, bytecode, output) do
    inputs = dependency_beams()
    digest = digest([bytecode | Enum.map(inputs, &File.read!/1)])
    marker = Path.join(output, ".popcorn.digest")
    bundle = Path.join(output, "bundle.avm")

    if stale?(marker, digest) or not File.exists?(bundle) or not File.exists?(bundle <> ".gz") do
      with_beam(module, bytecode, fn beam ->
        with_application_spec(module, fn ->
          Popcorn.cook(
            out_dir: Path.dirname(bundle),
            start_module: module,
            extra_beams: [beam],
            treeshake: true
          )
        end)
      end)

      File.write!(marker, digest)
    end
  end

  defp with_beam(module, bytecode, fun) do
    temporary = Path.join(System.tmp_dir!(), "vygotsky-#{System.unique_integer([:positive])}")
    filename = Atom.to_string(module) <> ".beam"
    beam = Path.join(temporary, filename)
    existing = Path.join([Mix.Project.app_path(), "ebin", filename])
    backup = existing <> ".popcorn-backup"

    File.mkdir_p!(temporary)
    File.write!(beam, bytecode)
    if File.exists?(existing), do: File.rename!(existing, backup)

    try do
      fun.(beam)
    after
      if File.exists?(backup), do: File.rename!(backup, existing)
      File.rm_rf!(temporary)
    end
  end

  defp with_application_spec(module, fun) do
    app = Mix.Project.config()[:app]

    unless Application.spec(app) do
      spec = [
        description: ~c"",
        vsn: Mix.Project.config()[:version] |> to_string() |> String.to_charlist(),
        modules: [module],
        registered: [],
        applications: [:kernel, :stdlib, :elixir, :logger, :signo, :popcorn]
      ]

      :ok = :application.load({:application, app, spec})
    end

    fun.()
  end

  defp build_digest(source) do
    inputs = [@source, source | dependency_beams()]
    digest(Enum.map(inputs, &File.read!/1))
  end

  defp dependency_beams do
    Mix.Project.build_path()
    |> Path.join("lib/*/ebin/*.beam")
    |> Path.wildcard()
    |> Enum.reject(&String.contains?(&1, "/vygotsky/"))
  end

  defp digest(contents) do
    :sha256
    |> :crypto.hash(contents)
    |> Base.encode16(case: :lower)
  end

  defp stale?(path, digest) do
    File.read(path) != {:ok, digest}
  end
end
