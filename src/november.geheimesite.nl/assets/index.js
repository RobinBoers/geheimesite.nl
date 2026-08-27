import "@xterm/xterm/css/xterm.css";
import "./main.css";

import { Popcorn } from "@swmansion/popcorn";
import { Terminal } from "@xterm/xterm";
import { Readline } from "xterm-readline";

import { FitAddon } from "@xterm/addon-fit";
import { LigaturesAddon } from "@xterm/addon-ligatures";

const month = new Intl.DateTimeFormat("en", { month: "long" }).format().toLowerCase();

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
term.loadAddon(ligaturesAddon);
term.focus();
fitAddon.fit();

// Positioning of logo

term.onScroll((position) => {
  const global = document.querySelector("#le-global");
  const row = document.querySelector(".xterm-rows > div");

  if(!global || !row) return;

  global.style.transform = `translateY(-${position * row.getBoundingClientRect().height}px)`;
});

term.parser.registerCsiHandler({ final: "J" }, (params) => {
  if(params[0] == 2 || params[0] == 3)
    document.querySelector("#le-global")?.remove();

  return false;
});

// Keyboard shortcuts

window.addEventListener("keydown", (event) => {
  const key = event.key.toLowerCase();

  if(!event.ctrlKey && !event.metaKey) return;
  if(key != "k" && key != "l") return;

  event.preventDefault();
  event.stopImmediatePropagation();
  term.input("\x0c");
});

// Formatting helpers

const link = (label, uri) => `\x1b]8;;${uri}\x1b\\\x1b[3m${label}\x1b[23m\x1b]8;;\x1b\\`;
const strikethrough = (text) => `\x1b[9m${text}\x1b[29m`;

// Terminal helpers

const wait = (ms) => new Promise((resolve) => setTimeout(resolve, ms));
const write = (text) => new Promise((resolve) => term.write(text.replaceAll("\n", "\r\n"), resolve));
const writeln = (text) => rl.write(text == "\x1b[H\x1b[2J" ? text : text + "\r\n");

// Uptime integration

const resolve_uptime = async () => {
  try {
    const response = await fetch("https://ilysm.fr/uptime", { cache: 'no-store' });
    if(!response.ok) return;

    const timestamp = Number.parseInt(await response.text(), 10);
    if(!Number.isFinite(timestamp)) return;

    const seconds = Math.max(0, Math.floor(Date.now() / 1000 - timestamp));
    const [value, unit] =
      seconds < 60    ? [seconds, 'second'] :
      seconds < 3600  ? [Math.floor(seconds / 60), 'minute'] :
      seconds < 86400 ? [Math.floor(seconds / 3600), 'hour'] :
                        [Math.floor(seconds / 86400), 'day'];

    return `It has been ${value} ${unit}${value == 1 ? "" : "s"} since last reboot.`;
  } catch {
    return null;
  }
}

// Boot message

await write(`
                       _
 ___ ___ _ _ ___ _____| |_ ___ ___
|   | . | | | -_|     | . | -_|  _|
|_|_|___|\\_/|___|_|_|_|___|___|_|

${month == "november" ? `november!! :3` : `${strikethrough("november")} ${month}`}

${new Date().toUTCString()}
`);

// const uptime = await resolve_uptime();
// if(uptime) write(uptime + "\n");

write(`
Greetings, dear traveler. You've reached november, the server powering most of ${link("{du}punkto", "https://dupunkto.org")} and ${link("geheimesite.nl", "https://geheimesite.nl")}.

You can contact the webmaster at ${link("geheimesite.nl/contact", "https://geheimesite.nl/contact")}.

This site provides a terminal interface to poke at the server, running a ${link("Signo", "https://git.dupunkto.org/~axcelott/signo")} shell in WebAssembly.

Find documentation at ${link("docs.dupunkto.org/signo", "https://docs.dupunkto.org/signo")}.

`);

// Loading animation

for(const path of ["/iframe.mjs", "/AtomVM.mjs", "/AtomVM.wasm", "/wasm/bundle.avm"]) {
  await write(`\r\x1b[2KLoading ${path}...`);
  await fetch(path).then((response) => response.arrayBuffer());
  await wait(10);
}

await write("\r\x1b[2K");

const popcorn = await Popcorn.init({
  bundlePaths: ["/wasm/bundle.avm"],
  onStdout: writeln,
  onStderr: writeln,
});

// REPL

let ln = 1;

while(true) {
  const expression = await rl.read(`sig(${ln})> `);
  const result = await popcorn.call(expression + "\n", { timeoutMs: 10_000 });

  if(result.ok) ln = result.data;
}
