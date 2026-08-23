import "@xterm/xterm/css/xterm.css";
import "./main.css";

import { Popcorn } from "@swmansion/popcorn";
import { Terminal } from "@xterm/xterm";

const term = new Terminal();
const stdweb = term.write.bind(term);

term.open(document.querySelector("#terminal"));

await Popcorn.init({
  bundlePaths: ["/wasm/bundle.avm"],
  onStdout: stdweb,
  onStderr: stdweb,
});
