import "@xterm/xterm/css/xterm.css";
import "./main.css";

import { Popcorn } from "@swmansion/popcorn";
import { Terminal } from "@xterm/xterm";
import { Readline } from "xterm-readline";

import { FitAddon } from "@xterm/addon-fit";
import { LigaturesAddon } from "@xterm/addon-ligatures";

const fitAddon = new FitAddon();
const ligaturesAddon = new LigaturesAddon();

const rl = new Readline();
const term = new Terminal({
  fontSize: 18,
  allowProposedApi: true,
  linkHandler: {
    activate: (_event, uri) => window.open(uri, "_blank", "noopener,noreferrer"),
  },
});

const wrapper = document.querySelector("#terminal");

term.loadAddon(rl);
term.open(wrapper);
term.loadAddon(fitAddon);
term.loadAddon(ligaturesAddon)
term.focus();
fitAddon.fit();

window.addEventListener("keydown", (event) => {
  const key = event.key.toLowerCase();

  if(!event.ctrlKey && !event.metaKey) return;
  if(key != "k" && key != "l") return;

  event.preventDefault();
  event.stopImmediatePropagation();
  term.input("\x0c");
});

const link = (label, uri) => `\x1b]8;;${uri}\x1b\\\x1b[3m${label}\x1b[23m\x1b]8;;\x1b\\`;
const strikethrough = (text) => `\x1b[9m${text}\x1b[29m`;

const up = "X";
const idx = (new Date()).getMonth();

const months = [
  "january",
  "february",
  "march",
  "april",
  "may",
  "june",
  "july",
  "august",
  "september",
  "october",
  "november",
  "december"
];

term.write(`
                       _
 ___ ___ _ _ ___ _____| |_ ___ ___
|   | . | | | -_|     | . | -_|  _|
|_|_|___|\\_/|___|_|_|_|___|___|_|

${idx == 10 ? `november!! :3` : `${strikethrough("november")} ${months[idx]}`}

${new Date().toUTCString()}
It has been ${up} days since last reboot.

Greetings, dear traveler. You've reached november, the server powering most of ${link("{du}punkto", "https://dupunkto.org")} and the ${link("geheimesite.nl", "https://geheimesite.nl")} webspaces.

You can contact the webmaster at geheimesite.nl/contact.

This site provides a terminal interface to poke at the server via a ${link("Signo", "https://git.dupunkto.org/~axcelott/signo")} shell running in WebAssembly with a virtual local filesystem.

Feel free to explore, have fun!


`.replaceAll("\n", "\r\n"));

const popcorn = await Popcorn.init({
  bundlePaths: ["/wasm/bundle.avm"],
  onStdout: (str) => rl.write(str + "\r\n"),
  onStderr: (str) => rl.write(str + "\r\n"),
});

let ln = 1;

while(true) {
  const expression = await rl.read(`sig(${ln})> `);
  const result = await popcorn.call(expression, { timeoutMs: 10_000 });

  if(result.ok) ln = result.data;
}
