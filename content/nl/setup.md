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

Mijn huidige distro is NixOS. Ik vind het cool dat mijn systeem immutable en reproduceerbaar is (en atomic upgrades zijn ook wel noice). Ik gebruik Ik gebruik een tiling window manager genaamd Sway. Sway is een wayland compositor. Ik gebruik wayland omdat ik het gevoel heb dat het soepeler is dan Xorg. Ik heb Sway geïntegreerd met gnome services, net zoals ik altijd op Arch deed met mijn [sway-gnome](https://github.com/RobinBoers/sway-gnome) fork.

Je kan mijn volledige Nix configuratie vinden in mijn [dotfiles](https://github.com/RobinBoers/dotfiles) repository.

## 🦊 Webbrowsers

Voor webbrowsing gebruik ik normaliter Firefox. Ik vind het cool om de look van mijn browser aan te passen met CSS (Firefox userchome is fantastisch!). Ik enjoy momenteel verticale tabs, die ik heb gestolen van [ranmaru22/firefox-vertical-tabs](https://github.com/ranmaru22/firefox-vertical-tabs).

Ik gebruik ook (Ungoogled) Chromium om mijn projecten te testen in een tweede browser en als ik per sé een Chrome-only API moet testen.

Zie mijn [firefox-tweaks](https://github.com/RobinBoers/firefox-tweaks) repo voor mijn huidige Firefox setup.

### Browser extenties

-   **Dark reader:** dark mode voor websites die het nog niet ondersteunen [F](https://addons.mozilla.org/en-US/firefox/addon/darkreader/) [G](https://chrome.google.com/webstore/detail/dark-reader/eimadpbcbfnmbkopoojfekhnkhdbieeh)
-   **Don't track me Google:** verwijderd tracking info uit links [F](https://addons.mozilla.org/en-US/firefox/addon/dont-track-me-google1/) [G](https://chrome.google.com/webstore/detail/dont-track-me-google/gdbofhhdmcladcmmfjolgndfkpobecpg?hl=en)
-   **DuckDuckGo Privacy Essentials:** bekijk tracking en privacy info voor sites [F](https://addons.mozilla.org/en-US/firefox/addon/duckduckgo-for-firefox/) [G](https://chrome.google.com/webstore/detail/duckduckgo-privacy-essent/bkdgflcldnnnapblkhphbgpggdiikppg?hl=en)
-   **Enhancer for YouTube:** geen ads + coole features [F](https://addons.mozilla.org/en-US/firefox/addon/enhancer-for-youtube/) [G](https://chrome.google.com/webstore/detail/enhancer-for-youtube/ponfpcnoihfmfllpaingbgckeeldkhle)
-   **Enhanced GitHub:** extra features voor GitHub zoals repo size en download buttons [F](https://addons.mozilla.org/en-US/firefox/addon/enhanced-github/) [G](https://chrome.google.com/webstore/detail/enhanced-github/anlikcnbgdeidpacdbdljnabclhahhmd)
-   **Facebook Container:** gebruikt container tabs om Facebook tracking te isoleren [F](https://addons.mozilla.org/en-US/firefox/addon/facebook-container/)
-   **Firefox Multi-Account Containers:** containers voor werk/school gerelateerde accounts [F](https://addons.mozilla.org/en-US/firefox/addon/multi-account-containers/)
-   **uBlock origin:** block ads :) [F](https://addons.mozilla.org/en-US/firefox/addon/ublock-origin/) [G](https://chrome.google.com/webstore/detail/ublock-origin/cjpalhdlnbpafiamejdnhcphjbkeiagm?hl=en)
-   **Web Archives:** bekijk oude versies van sites [F](https://addons.mozilla.org/en-US/firefox/addon/view-page-archive/) [G](https://chrome.google.com/webstore/detail/web-archives/hkligngkgcpcolhcnkgccglchdafcnao?hl=en)
-   **I still don't care about cookies**: klikt automatisch cookie popups weg [F](https://addons.mozilla.org/en-US/firefox/addon/istilldontcareaboutcookies/) [G](https://chrome.google.com/webstore/detail/i-still-dont-care-about-c/edibdbjcniadpccecjdfdjjppcpchdlm)

## 🛠️ CLI

Mijn favoriete shell is `fish`. Ik ben helemaal gek op de autocomplete en color support dat het bied. Ik gebruik starship as prompt omdat het er goed uitziet zonder enige configuration en in alle shells goed werkt (dus mn shell ziet er hetzelfde uit als ik voor some reason van shell switch).

-   **`gh`**: issues/PRs aanmaken
-   **`git`**: version control
-   **`pass`:** password manager
-   **`bix`**: wrappper voor package managers
-   **`nvim`**: primaire tekst editor
-   **`htop`**: taskmanager
-   **`yt-dlp`**: download video's
-   **`spotdl`**: download spotify playlists
-   **`flatpak`**: cross-platform apps
-   **`bat`**: replacement voor `cat` en pager voor `man`
-   **`fd`**: replacement voor `find`
-   **`ripgrep`**: replacement voor `grep`
-   **`delta`**: verbeterde git diff
-   **`cmatrix`**: aan mijn vrienden laten zien dat ik een gekke hacker ben
-   **`ranger`**: file managment
-   **`phploy`**: revision based deployment using git

## 💾 Code editor

Mijn favoriete code editor is VSCode. Ik heb in het verleden heb zowel Brackets als Atom gebruikt, maar VSCode is gewoon perfect. Het laadt snel en heeft verschrikkelijk veel nuttige plugins.

En als extra bonus synct het ook nog eens via mijn GitHub account met settings sync.

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

Ik wil graag dat mijn editor dark is, zoals veel programmeurs. Mijn favoriete dark themes zijn:

-   [Adwaita](https://marketplace.visualstudio.com/items?itemName=piousdeer.adwaita-theme).
    It integrates nicely with my other GTK applications.
-   [Frontend Delight Dark](https://github.com/RobinBoers/frontend-delight-vscode).
    Dit colorscheme heb ik een keer ergens anders vandaan geport, maar ik kan me niet meer precies herinneren waar ik het gestolen heb.
-   [GitHub Dark](https://marketplace.visualstudio.com/items?itemName=GitHub.github-vscode-theme).
    Dit is het oude GitHub theme voor VSCode. Het nieuwe heet GitHub Dark Default.

Ik vind [Ayu dark](https://marketplace.visualstudio.com/items?itemName=teabyii.ayu), [Tokyo Night](https://marketplace.visualstudio.com/items?itemName=enkia.tokyo-night) en [Adwaita Light](https://marketplace.visualstudio.com/items?itemName=piousdeer.adwaita-theme) ook leuk, maar ik gebruik zelden light mode. Voor file icons gebruik ik [vscode-icons](https://marketplace.visualstudio.com/items?itemName=vscode-icons-team.vscode-icons), en voor de product icons heb ik [Fluent icons](https://marketplace.visualstudio.com/items?itemName=miguelsolorio.fluent-icons).

Mijn favoriete font bitmap font is Terminus. Verder gebruik ik overal JetBrains Mono vanwege de clean look en fancy ligatures.

Vroeger gebruikte ik ook [DejaVu Sans Mono](https://github.com/dejavu-fonts/dejavu-fonts) en voor VSCode een versie daarvan genaamd [DejaVu Sans Code](https://github.com/SSNikolaevich/DejaVuSansCode), met support voor ligatures heeft.

## 📒 Apps

Dit zijn de apps die ik dagelijks gebruik:

-   **Thunderbird:** Mail en IRC client
-   **Rofi:** Desktop en run launcher
-   **Kitty:** Terminal emulator
-   **Spotify Web**: Music :D
-   **Element:** Chatten
-   **Feh:** Image viewer & wallpaper setter
-   **FileZilla:** FTP client
-   **Portmaster:** Firewall
-   **Celluloid:** Media player
-   **Aegis:** 2FA authenticator

## 👀 Mentioned

-   [firefox-tweaks](https://github.com/RobinBoers/firefox-tweaks) - firefox setup
-   [sway-gnome](https://github.com/RobinBoers/sway-gnome) - gnome intergratie via systemd voor sway
-   [frontend-delight-vscode](https://github.com/RobinBoers/frontend-delight-vscode) - vscode theme
-   [CopyPasta](https://github.com/RobinBoers/CopyPasta) - github copilot at home

Geschreven door Robin Boers. Geïnspireerd door [divyanshu013/linux-dev-setup](https://github.com/divyanshu013/linux-dev-setup).
