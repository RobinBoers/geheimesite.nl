---
title: "Uses"
translationKey: setup
hideTitle: true
menu: "more"
weight: 4
---

# Linux Dev setup

Mijn setup voor software/web development op Linux. Elixir, NodeJS, Python, PostgreSQL en PHP.

## 🐧 Distro

Mijn huidige distro is Arch Linux met minimale packages. Het houdt mijn systeem snel en responsive. Ik gebruik een tiling window manager genaamd Sway, wat een wayland compositor is. Ik gebruik wayland omdat ik het gevoel heb dat het soepeler is dan Xorg. Ik heb Sway geïntegreerd met gnome services via [sway-gnome](https://github.com/RobinBoers/sway-gnome).

## 🦊 Webbrowsers

Voor webbrowsing gebruik ik normaliter Firefox. Ik vind het nieuwe proton design echt verschrikkelijk, dus ik het het teruggedraaid met wat CSS (Firefox is fantastisch!). Ik gebruik ook dit Firefox theme:  [https://addons.mozilla.org/en-US/firefox/addon/photon-colors](https://addons.mozilla.org/en-US/firefox/addon/photon-colors)

Ik gebruik ook Chromium om mijn projecten te testen in een tweede browser en als ik per se een Chrome-only API moet testen.

Zie mijn [firefox-tweaks](https://github.com/RobinBoers/firefox-tweaks) repo voor mijn huidige Firefox setup.

### Browser extenties

-   **Dark reader:** dark mode voor websites die het nog niet ondersteunen [](https://addons.mozilla.org/en-US/firefox/addon/darkreader/) [](https://chrome.google.com/webstore/detail/dark-reader/eimadpbcbfnmbkopoojfekhnkhdbieeh)
-   **Don't track me Google:** verwijderd tracking info uit links [](https://addons.mozilla.org/en-US/firefox/addon/dont-track-me-google1/) [](https://chrome.google.com/webstore/detail/dont-track-me-google/gdbofhhdmcladcmmfjolgndfkpobecpg?hl=en)
-   **DuckDuckGo Privacy Essentials:** bekijk tracking en privacy info voor sites [](https://addons.mozilla.org/en-US/firefox/addon/duckduckgo-for-firefox/) [](https://chrome.google.com/webstore/detail/duckduckgo-privacy-essent/bkdgflcldnnnapblkhphbgpggdiikppg?hl=en)
-   **Enhancer for YouTube:** geen ads + coole features [](https://addons.mozilla.org/en-US/firefox/addon/enhancer-for-youtube/) [](https://chrome.google.com/webstore/detail/enhancer-for-youtube/ponfpcnoihfmfllpaingbgckeeldkhle)
-   **Facebook Container:** gebruikt container tabs om Facebook tracking te isoleren [](https://addons.mozilla.org/en-US/firefox/addon/facebook-container/)
-   **File icons for GitHub:** fancy file icons voor GitHub [](https://addons.mozilla.org/en-US/firefox/addon/github-file-icons/) [](https://chrome.google.com/webstore/detail/file-icons-for-github-and/ficfmibkjjnpogdcfhfokmihanoldbfe?hl=en)
-   **uBlock origin:** block ads :) [](https://addons.mozilla.org/en-US/firefox/addon/ublock-origin/) [](https://chrome.google.com/webstore/detail/ublock-origin/cjpalhdlnbpafiamejdnhcphjbkeiagm?hl=en)
-   **Web Archives:** bekijk oude versies van sites [](https://addons.mozilla.org/en-US/firefox/addon/view-page-archive/) [](https://chrome.google.com/webstore/detail/web-archives/hkligngkgcpcolhcnkgccglchdafcnao?hl=en)

## 🛠️ CLI

Mijn favoriete shell is fish. Ik ben helemaal gek op de autocomplete en color support dat het bied. Ik gebruik starship as prompt omdat het er goed uitziet zonder enige configuration en in alle shells goed werkt (dus mn shell ziet er hetzelfde uit als ik voor some reason van shell switch).

-   **`gh:`** github CLI
-   **`git:`** version control
-   **`nvim:`** primaire tekst editor
-   **`htop:`** taskmanager
-   **`yt-dlp:`** download video's
-   **`spotdl:`** download spotify playlists
-   **`flatpak:`** cross-platform apps
-   **`bat:`** replacement voor `cat` en pager voor `man`
-   **`fd:`** replacement voor `find`
-   **`ripgrep:`** replacement voor `grep`
-   **`delta:`** verbeterde git diff
-   **`cmatrix:`** aan mijn vrienden laten zien dat ik een gekke hacker ben
-   **`ranger:`** file managment
-   **`ncmpcpp:`** muziek player

## 💾 Code editor

Mijn favoriete code editor is VSCode. Ik in het verleden heb zowel Brackets als Atom gebruikt, maar VSCode is gewoonweg perfect. Het laad snel en heeft verschrikkelijk veel nuttige plugins.

En als extra bonus synct het ook nogeens via mijn GitHub account met settings sync.

### Extenties

-   [Auto close tag](https://marketplace.visualstudio.com/items?itemName=formulahendry.auto-close-tag) - sluit HTML en XML tags
-   [Auto rename tag](https://marketplace.visualstudio.com/items?itemName=formulahendry.auto-rename-tag) - rename tags gemakkelijker
-   [colorize](https://marketplace.visualstudio.com/items?itemName=kamikillerto.vscode-colorize) - maakt kleuren in tekst gekleurd
-   [CopyPasta](https://marketplace.visualstudio.com/items?itemName=makman12.copypasta) (my [fork](https://github.com/RobinBoers/CopyPasta)) - pulls stuff van StackOverflow (GitHub copilot at home :joy:)
-   [ElixirLS](https://marketplace.visualstudio.com/items?itemName=JakeBecker.elixir-ls) - elixir language support
-   [ESLint](https://marketplace.visualstudio.com/items?itemName=dbaeumer.vscode-eslint)
-   [Prettier](https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode) - Code formatter
-   [Formatting toggle](https://marketplace.visualstudio.com/items?itemName=tombonnike.vscode-status-bar-format-toggle) - ik wil niet altijd formatting
-   [language-mcfunction](https://marketplace.visualstudio.com/items?itemName=arcensoth.language-mcfunction) - support voor minecraft datapacks
-   PHP IntelliSense
-   [Rasi](https://marketplace.visualstudio.com/items?itemName=dlasagno.rasi) - rofi config format
-   [XML](https://marketplace.visualstudio.com/items?itemName=redhat.vscode-xml) and [YAML](https://marketplace.visualstudio.com/items?itemName=redhat.vscode-yaml)
-   [GitLens](https://marketplace.visualstudio.com/items?itemName=eamodio.gitlens) - git maar cooler
-   [Pylance](https://marketplace.visualstudio.com/items?itemName=ms-python.vscode-pylance) & [Python](https://marketplace.visualstudio.com/items?itemName=ms-python.python) - python support

### Theming

Ik wil graag dat mijn editor donker is, zoals veel programmeurs. Mijn favoriete dark themes zijn:

-   [Frontend Delight Dark](https://github.com/RobinBoers/frontend-delight-vscode).
    Dit color theme heb ik zelf gemaakt. Ik gebruik het ook in Firefox, Alacritty en Spotify.
-   [GitHub Dark](https://marketplace.visualstudio.com/items?itemName=GitHub.github-vscode-theme).
    Dit is het oude GitHub theme voor VSCode. Het nieuwe heet GitHub Dark Default.

Ik vind [Ayu dark](https://marketplace.visualstudio.com/items?itemName=teabyii.ayu), [Tokyo Night](https://marketplace.visualstudio.com/items?itemName=enkia.tokyo-night) en [Ayu Light](https://marketplace.visualstudio.com/items?itemName=teabyii.ayu) ook leuk, maar ik gebruik zelden light mode. Voor file icons gebruik ik [vscode-icons](https://marketplace.visualstudio.com/items?itemName=vscode-icons-team.vscode-icons), en voor de product icons heb ik [Fluent icons](https://marketplace.visualstudio.com/items?itemName=miguelsolorio.fluent-icons).

Mijn favoriete font is Terminus.  
Ik vind [DejaVu Sans Mono](https://github.com/dejavu-fonts/dejavu-fonts) ook mooi. Voor VSCode gebruik ik een versie genaamd [DejaVu Sans Code](https://github.com/SSNikolaevich/DejaVuSansCode), die support heeft voor ligatures.

## 📒 Apps

Dit zijn de apps die ik dagelijks gebruik: 

-   **Thunderbird:** Mail en IRC client
-   **Rofi:** Desktop en run launcher
-   **Alacritty:** Terminal emulator
-   **MPD & `ncmpcpp`:** Muziek player
-   **Discord:** Chatten
-   **Feh:** Image viewer & wallpaper setter
-   **FileZilla:** FTP client
-   **Portmaster:** Firewall
-   **VLC media player:** Media player
-   **Lockwise:** Password manager
-   **Tofu:** 2FA authenticator

## 👀 Mentioned

-   [firefox-tweaks](https://github.com/RobinBoers/firefox-tweaks) - firefox setup
-   [sway-gnome](https://github.com/RobinBoers/sway-gnome) - gnome intergratie via systemd voor sway
-   [frontend-delight-vscode](https://github.com/RobinBoers/frontend-delight-vscode) - vscode theme
-   [CopyPasta](https://github.com/RobinBoers/CopyPasta) - github copilot at home

Geschreven door Robin Boers. Geïnspireerd door [divyanshu013/linux-dev-setup](https://github.com/divyanshu013/linux-dev-setup).
