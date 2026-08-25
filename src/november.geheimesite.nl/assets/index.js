import "@xterm/xterm/css/xterm.css";
import "./main.css";

import { Popcorn } from "@swmansion/popcorn";
import { Terminal } from "@xterm/xterm";
import { Readline } from "xterm-readline";
import { UAParser } from "ua-parser-js";

import { FitAddon } from "@xterm/addon-fit";
import { LigaturesAddon } from "@xterm/addon-ligatures";

const { browser, os, device } = UAParser();

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

await write(`
${navigator.userAgent}
${new Date().toUTCString()}

`);

const loading = async (name, task) => {
  await write(`\r\x1b[2KLoading ${name}...`);
  const result = await task();
  await wait(30);
  return result;
}

const uptime = await loading("https://ilysm.fr/uptime", resolve_uptime);

for(const path of ["/iframe.mjs", "/AtomVM.mjs", "/AtomVM.wasm", "/wasm/bundle.avm"]) {
  await loading(path, () => fetch(path).then((response) => response.arrayBuffer()));
}

await write("\r\x1b[2K");

const join = (...parts) => parts.filter(Boolean).join(" ");

const get_gpu = () => {
  const canvas = document.createElement("canvas");
  const gl = canvas.getContext("webgl2") || canvas.getContext("webgl");

  if(!gl) return;

  const info = gl.getExtension("WEBGL_debug_renderer_info");

  return info
    ? `${gl.getParameter(info.UNMASKED_VENDOR_WEBGL)} ${gl.getParameter(info.UNMASKED_RENDERER_WEBGL)}`
    : gl.getParameter(gl.RENDERER);
}

const get_pointer = () => {
  return matchMedia("(hover: hover) and (pointer: fine)").matches ? 'mouse' :
    matchMedia("(hover: none) and (pointer: fine)").matches ? 'stylus' :
    matchMedia("(hover: none) and (pointer: coarse)").matches ? 'touch' :
    matchMedia("(hover: hover) and (pointer: coarse)").matches ? 'controller' :
    'mouse';
}

for(const line of `
  Version: 0.1a-prod

  CPU: ${navigator.hardwareConcurrency} cores
  GPU: ${get_gpu()}
  Memory: ${navigator.deviceMemory} GB
  Network: ${navigator.connection?.type || `±${navigator.connection?.effectiveType}`}
  Locale: ${navigator.languages.join(", ")}
  Pointer: ${get_pointer()}
  Platform: ${join(os.name, os.version)}
  Browser: ${join(browser.name, browser.major)}
  Viewport: ${window.matchMedia("(max-width: 767px)").matches ? 'mobile' : 'desktop'}
  Realm: ${window == window.top ? 'top' : origin == "null" ? 'sandbox' : 'iframe'}

  Booting into remote november(11) session...
  `.trim().split("\n")) {
  await write(line.trim() + "\n");
  await wait(5);
}

await wait(700);
term.clear();

await write(`                       _
 ___ ___ _ _ ___ _____| |_ ___ ___
|   | . | | | -_|     | . | -_|  _|
|_|_|___|\\_/|___|_|_|_|___|___|_|

${month == "november" ? `november!! :3` : `${strikethrough("november")} ${month}`}

${new Date().toUTCString()}${uptime ? `\n${uptime}` : ""}

Greetings, dear traveler. You've reached november, the server powering most of ${link("{du}punkto", "https://dupunkto.org")} and ${link("geheimesite.nl", "https://geheimesite.nl")}.

You can contact the webmaster at geheimesite.nl/contact.

This site provides a terminal interface to poke at the server via a ${link("Signo", "https://git.dupunkto.org/~axcelott/signo")} shell running in WebAssembly with a virtual local filesystem.

Feel free to explore, have fun!


`);

const popcorn = await Popcorn.init({
  bundlePaths: ["/wasm/bundle.avm"],
  onStdout: (str) => rl.write(str + "\r\n"),
  onStderr: (str) => rl.write(str + "\r\n"),
});

let ln = 1;

while(true) {
  const expression = await rl.read(`sig(${ln})> `);
  const result = await popcorn.call(expression + "\n", { timeoutMs: 10_000 });

  if(result.ok) ln = result.data;
}
