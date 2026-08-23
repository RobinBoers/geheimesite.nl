import * as esbuild from "esbuild";
import { popcorn } from "@swmansion/popcorn/esbuild";
import { copyFile, mkdir } from "fs/promises";

await mkdir("../dist", { recursive: true });
await copyFile("../public/index.html", "../dist/index.html");

const ctx = await esbuild.context({
  entryPoints: ["index.js"],
  bundle: true,
  format: "esm",
  sourcemap: true,
  outfile: "../dist/index.js",
  plugins: [popcorn({ bundlePaths: ["../dist/wasm/bundle.avm"] })],
});

if (process.argv.includes("--watch")) {
  await ctx.watch();
} else {
  await ctx.rebuild();
  await ctx.dispose();
}
