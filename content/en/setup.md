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

My current distro of choice is NixOS. I like the immutable and reproducable system it provides, and the atomic upgrades are a nice bonus. I mainly use a tiling window manager called Sway, which is a wayland compositer. I like wayland because I find it to be way more responsive/smooth than Xorg. I integrated Sway with gnome services, similar to the [sway-gnome](https://github.com/RobinBoers/sway-gnome) fork that I used on Arch.

You can find my entire Nix configuration in my [dotfiles](https://github.com/RobinBoers/dotfiles) repository.

## 🦊 Webbrowsers

For most of my webbrowsing needs I use Firefox. I love customizing my browser using custom CSS. Currently I'm rocking vertical tabs, which I stole from [ranmaru22/firefox-vertical-tabs](https://github.com/ranmaru22/firefox-vertical-tabs).

I also use (Ungoogled) Chromium to test my projects in another browser and if I need to use some Chrome-only app or API.

See my [firefox-tweaks](https://github.com/RobinBoers/firefox-tweaks) repo for my current Firefox setup.

### Browser extensions

-   **Dark reader:** dark mode for websites that don't support it out-of-the-box [F](https://addons.mozilla.org/en-US/firefox/addon/darkreader/) [G](https://chrome.google.com/webstore/detail/dark-reader/eimadpbcbfnmbkopoojfekhnkhdbieeh)
-   **Don't track me Google:** removes tracking info from links [F](https://addons.mozilla.org/en-US/firefox/addon/dont-track-me-google1/) [G](https://chrome.google.com/webstore/detail/dont-track-me-google/gdbofhhdmcladcmmfjolgndfkpobecpg?hl=en)
-   **DuckDuckGo Privacy Essentials:** see tracking and privacy info for sites [F](https://addons.mozilla.org/en-US/firefox/addon/duckduckgo-for-firefox/) [G](https://chrome.google.com/webstore/detail/duckduckgo-privacy-essent/bkdgflcldnnnapblkhphbgpggdiikppg?hl=en)
-   **Enhancer for YouTube:** remove ads and get cool features [F](https://addons.mozilla.org/en-US/firefox/addon/enhancer-for-youtube/) [G](https://chrome.google.com/webstore/detail/enhancer-for-youtube/ponfpcnoihfmfllpaingbgckeeldkhle)
-   **Enhanced GitHub:** extra features for GitHub like repo size and download buttons [F](https://addons.mozilla.org/en-US/firefox/addon/enhanced-github/) [G](https://chrome.google.com/webstore/detail/enhanced-github/anlikcnbgdeidpacdbdljnabclhahhmd)
-   **Facebook Container:** uses container tabs to isolate Facebook tracking [F](https://addons.mozilla.org/en-US/firefox/addon/facebook-container/)
-   **Firefox Multi-Account Containers:** containers for work/school related accounts [F](https://addons.mozilla.org/en-US/firefox/addon/multi-account-containers/)
-   **uBlock origin:** blocks ads :) [F](https://addons.mozilla.org/en-US/firefox/addon/ublock-origin/) [G](https://chrome.google.com/webstore/detail/ublock-origin/cjpalhdlnbpafiamejdnhcphjbkeiagm?hl=en)
-   **Web Archives:** see earlier versions of sites [F](https://addons.mozilla.org/en-US/firefox/addon/view-page-archive/) [G](https://chrome.google.com/webstore/detail/web-archives/hkligngkgcpcolhcnkgccglchdafcnao?hl=en)
-   **I still don't care about cookies**: gets rid of cookie popups automatically [F](https://addons.mozilla.org/en-US/firefox/addon/istilldontcareaboutcookies/) [G](https://chrome.google.com/webstore/detail/i-still-dont-care-about-c/edibdbjcniadpccecjdfdjjppcpchdlm)

## 🛠️ CLI

My shell is `fish`. I like the amazing autocomplete and color support it has. I use starship prompt because it requires no configuration at all, looks amazing and works for all shells (meaning my shell looks the same if I switch to bash for some reason).

-   **`gh`**: creating issues/PRs
-   **`pass`:** password manager
-   **`git`**: version control
-   **`bix`**: wrappper for package managers
-   **`nvim`**: main text editor
-   **`htop`**: taskmanager
-   **`yt-dlp`**: download videos
-   **`spotdl`**: download spotify playlists
-   **`bat`**: replacement for `cat` and pager for `man`
-   **`fd`**: replacement for `find`
-   **`ripgrep`**: replacement for `grep`
-   **`delta`**: improved git diff
-   **`cmatrix`**: showing my friends I'm a real bad hacker
-   **`ranger`**: file managment

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

-   [Adwaita](https://marketplace.visualstudio.com/items?itemName=piousdeer.adwaita-theme).
    It integrates nicely with my other GTK applications.
-   [Frontend Delight Dark](https://github.com/RobinBoers/frontend-delight-vscode).
    This is a colorscheme that I ported from somewhere else, but I can't quite remember where I found it.
-   [GitHub Dark](https://marketplace.visualstudio.com/items?itemName=GitHub.github-vscode-theme).
    This is the old GitHub dark theme for VSCode. The new one is called GitHub Dark Default.

I also like [Ayu dark](https://marketplace.visualstudio.com/items?itemName=teabyii.ayu), [Tokyo Night](https://marketplace.visualstudio.com/items?itemName=enkia.tokyo-night) and [Adwaita Light](https://marketplace.visualstudio.com/items?itemName=piousdeer.adwaita-theme), but rarely use light mode. For file icons is use [vscode-icons](https://marketplace.visualstudio.com/items?itemName=vscode-icons-team.vscode-icons), and for product icons I use [Fluent icons](https://marketplace.visualstudio.com/items?itemName=miguelsolorio.fluent-icons).

My favorite bitmap font is Terminus. In other applications I use Jetbrains Mono because it looks clean and has support for fancy ligatures.

I used to use [DejaVu Sans Mono](https://github.com/dejavu-fonts/dejavu-fonts) and a fork which added ligatures support, called [DejaVu Sans Code](https://github.com/SSNikolaevich/DejaVuSansCode).

## 📒 Apps

These are the GUI apps I use on a day to day basis:

-   **Thunderbird:** Mail and IRC client
-   **Rofi:** Desktop and run launcher
-   **Kitty:** Terminal emulator
-   **Spotify Web**: Music :D
-   **Element:** Chatting
-   **Feh:** Image viewer & wallpaper setter
-   **FileZilla:** FTP client
-   **Celluloid:** Media player
-   **Aegis**: 2FA authenticator

## 👀 Mentioned

-   [firefox-tweaks](https://github.com/RobinBoers/firefox-tweaks) - firefox setup
-   [sway-gnome](https://github.com/RobinBoers/sway-gnome) - gnome integration via systemd for sway
-   [frontend-delight-vscode](https://github.com/RobinBoers/frontend-delight-vscode) - vscode theme
-   [CopyPasta](https://github.com/RobinBoers/CopyPasta) - github copilot at home

Written by Robin Boers. Inspired by [divyanshu013/linux-dev-setup](https://github.com/divyanshu013/linux-dev-setup).
