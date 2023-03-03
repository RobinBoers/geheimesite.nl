---
title: "Uses"
translationKey: setup
hideTitle: true
menu: "more"
weight: 4
---

# Linux Dev setup

My setup for software/web development on Linux. Elixir, NodeJS, Python, PostgreSQL and PHP.

## 🐧 Distro

My current distro of choice is Arch Linux with minimal packages. It keeps my system quick and responsive. I use a tiling window manager called Sway, which is a wayland compositor. I like wayland because I find it to be way more responsive/smooth than Xorg. I integrated Sway with gnome services via [sway-gnome](https://github.com/RobinBoers/sway-gnome).

## 🦊 Webbrowsers

For most of my webbrowsing needs I use Firefox. I absolutely don't like the new proton design, so I reverted it to the old Photon look with css files. I also use this Firefox theme: [https://addons.mozilla.org/en-US/firefox/addon/photon-colors](https://addons.mozilla.org/en-US/firefox/addon/photon-colors)

I also use Chromium to test my projects in another browser and if I need to use some Chrome-only app or API.

See my [firefox-tweaks](https://github.com/RobinBoers/firefox-tweaks) repo for my current Firefox setup.

### Browser extensions

-   **Dark reader:** dark mode for websites that don't support it out-of-the-box [](https://addons.mozilla.org/en-US/firefox/addon/darkreader/) [](https://chrome.google.com/webstore/detail/dark-reader/eimadpbcbfnmbkopoojfekhnkhdbieeh)
-   **Don't track me Google:** removes tracking info from links [](https://addons.mozilla.org/en-US/firefox/addon/dont-track-me-google1/) [](https://chrome.google.com/webstore/detail/dont-track-me-google/gdbofhhdmcladcmmfjolgndfkpobecpg?hl=en)
-   **DuckDuckGo Privacy Essentials:** see tracking and privacy info for sites [](https://addons.mozilla.org/en-US/firefox/addon/duckduckgo-for-firefox/) [](https://chrome.google.com/webstore/detail/duckduckgo-privacy-essent/bkdgflcldnnnapblkhphbgpggdiikppg?hl=en)
-   **Enhancer for YouTube:** remove ads and get cool features [](https://addons.mozilla.org/en-US/firefox/addon/enhancer-for-youtube/) [](https://chrome.google.com/webstore/detail/enhancer-for-youtube/ponfpcnoihfmfllpaingbgckeeldkhle)
-   **Facebook Container:** uses container tabs to isolate Facebook tracking [](https://addons.mozilla.org/en-US/firefox/addon/facebook-container/)
-   **File icons for GitHub:** nice file icons in GitHub [](https://addons.mozilla.org/en-US/firefox/addon/github-file-icons/) [](https://chrome.google.com/webstore/detail/file-icons-for-github-and/ficfmibkjjnpogdcfhfokmihanoldbfe?hl=en)
-   **uBlock origin:** blocks ads :) [](https://addons.mozilla.org/en-US/firefox/addon/ublock-origin/) [](https://chrome.google.com/webstore/detail/ublock-origin/cjpalhdlnbpafiamejdnhcphjbkeiagm?hl=en)
-   **Web Archives:** see earlier versions of sites [](https://addons.mozilla.org/en-US/firefox/addon/view-page-archive/) [](https://chrome.google.com/webstore/detail/web-archives/hkligngkgcpcolhcnkgccglchdafcnao?hl=en)

## 🛠️ CLI

My shell is fish. I like the amazing autocomplete and color support it has. I use starship prompt because it requires no configuration at all, looks amazing and works for all shells (meaning my shell looks the same if I switch to bash for some reason).

-   **`gh:`** github CLI
-   **`git:`** version control
-   **`nvim:`** main text editor
-   **`htop:`** taskmanager
-   **`yt-dlp:`** download videos
-   **`spotdl:`** download spotify playlists
-   **`flatpak:`** cross-platform apps
-   **`bat:`** replacement for `cat` and pager for `man`
-   **`fd:`** replacement for `find`
-   **`ripgrep:`** replacement for `grep`
-   **`delta:`** improved git diff
-   **`cmatrix:`** showing my friends I'm a real bad hacker
-   **`ranger:`** file managment
-   **`ncmpcpp:`** music player

## 💾 Code editor

My favorite code editor is VSCode. I used both Brackets and Atom for quite some time, but VSCode is just perfect for me. It loads quickly and has lots of useful extensions.

VSCode also syncs my setup across machines using settings sync with my GitHub account.

### Extensions

-   [Auto close tag](https://marketplace.visualstudio.com/items?itemName=formulahendry.auto-close-tag) - closes HTML and XML tags
-   [Auto rename tag](https://marketplace.visualstudio.com/items?itemName=formulahendry.auto-rename-tag) - rename tags easier
-   [colorize](https://marketplace.visualstudio.com/items?itemName=kamikillerto.vscode-colorize) - makes colors in text colored
-   [CopyPasta](https://marketplace.visualstudio.com/items?itemName=makman12.copypasta) (my [fork](https://github.com/RobinBoers/CopyPasta)) - pulls stuff from StackOverflow (GitHub copilot at home :joy:)
-   [ElixirLS](https://marketplace.visualstudio.com/items?itemName=JakeBecker.elixir-ls) - elixir language support
-   [ESLint](https://marketplace.visualstudio.com/items?itemName=dbaeumer.vscode-eslint)
-   [Prettier](https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode) - Code formatter
-   [Formatting toggle](https://marketplace.visualstudio.com/items?itemName=tombonnike.vscode-status-bar-format-toggle) - I dont like code formatting always
-   [language-mcfunction](https://marketplace.visualstudio.com/items?itemName=arcensoth.language-mcfunction) - support for minecraft datapacks
-   PHP IntelliSense
-   [Rasi](https://marketplace.visualstudio.com/items?itemName=dlasagno.rasi) - rofi config format
-   [XML](https://marketplace.visualstudio.com/items?itemName=redhat.vscode-xml) and [YAML](https://marketplace.visualstudio.com/items?itemName=redhat.vscode-yaml)
-   [GitLens](https://marketplace.visualstudio.com/items?itemName=eamodio.gitlens) - git but cooler
-   [Pylance](https://marketplace.visualstudio.com/items?itemName=ms-python.vscode-pylance) & [Python](https://marketplace.visualstudio.com/items?itemName=ms-python.python) - python support

### Theming

I like my editor, like most programmers, to be dark. My favorite dark themes are:

-   [Frontend Delight Dark](https://github.com/RobinBoers/frontend-delight-vscode).
    This is the color theme I'm also using in Alacritty, Spotify, Firefox and other apps.
-   [GitHub Dark](https://marketplace.visualstudio.com/items?itemName=GitHub.github-vscode-theme).
    This is the old GitHub dark theme for VSCode. The new one is called GitHub Dark Default.

I also like [Ayu dark](https://marketplace.visualstudio.com/items?itemName=teabyii.ayu), [Tokyo Night](https://marketplace.visualstudio.com/items?itemName=enkia.tokyo-night) and [Ayu Light](https://marketplace.visualstudio.com/items?itemName=teabyii.ayu), but rarely use light mode. For file icons is use [vscode-icons](https://marketplace.visualstudio.com/items?itemName=vscode-icons-team.vscode-icons), and for product icons I use [Fluent icons](https://marketplace.visualstudio.com/items?itemName=miguelsolorio.fluent-icons).

My favorite font is [DejaVu Sans Mono](https://github.com/dejavu-fonts/dejavu-fonts). For VSCode I'm using a version called [DejaVu Sans Code](https://github.com/SSNikolaevich/DejaVuSansCode), which has ligatures support.

## 📒 Apps

These are the GUI apps I use on a day to day basis:

-   **Thunderbird:** Mail and IRC client
-   **Rofi:** Desktop and run launcher
-   **Alacritty:** Terminal emulator
-   **MPD & `ncmpcpp`:** Music player
-   **Discord:** Chatting
-   **Feh:** Image viewer & wallpaper setter
-   **FileZilla:** FTP client
-   **Portmaster:** Firewall
-   **VLC media player:** Media player
-   **Lockwise:** Password manager
-   **Tofu:** 2FA authenticator

## 👀 Mentioned

-   [firefox-tweaks](https://github.com/RobinBoers/firefox-tweaks) - firefox setup
-   [sway-gnome](https://github.com/RobinBoers/sway-gnome) - gnome integration via systemd for sway
-   [frontend-delight-vscode](https://github.com/RobinBoers/frontend-delight-vscode) - vscode theme
-   [CopyPasta](https://github.com/RobinBoers/CopyPasta) - github copilot at home

Written by Robin Boers. Inspired by [divyanshu013/linux-dev-setup](https://github.com/divyanshu013/linux-dev-setup).
