<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>/setup — geheimesite.nl | Robin Boers</title>

    <link rel="alternate stylesheet" href="/assets/css/plain.css" title="plain" />
    <script src="/assets/js/plain-mode.js"></script>

    <link rel="stylesheet" href="/assets/css/main.css" title="default" />
    <script defer src="/assets/js/menu.js"></script>

    <link rel="alternate" hreflang="nl" href="https://geheimesite.nl/boeken" />

    <style>
        .project-grid li a img {
            aspect-ratio: initial !important;
        }
    </style>
</head>

<body>
    <a class="skip-nav" href="#content">Skip navigation</a>
    <header class="pageheader">
        <p class="title"><a href="/en/">Robin Boers</a></p>

        <img src="/assets/images/menu.svg" alt="menu button" class="menu-button" hidden />

        <nav>
            <ul class="menu">
                <li><a href="/en/">Home</a></li>
                <li><a href="/en/about">About me</a></li>
                <li><a href="/en/projects">Projects</a></li>
                <li><a href="/en/books">Books</a></li>
                <li><a href="https://blog.geheimesite.nl/en">Blog</a></li>
            </ul>
        </nav>
    </header>

    <main id="content" class="page-content">
        <article>
            <section>
                <h1 id="linux-dev-setup">Linux Dev setup</h1>
                <p>
                    My setup for software/web development on Linux. Elixir, NodeJS,
                    Python, PostgreSQL and PHP.
                </p>
                <h2 id="distro">🐧 Distro</h2>
                <p>
                    My current distro of choice is Arch Linux with minimal packages. It
                    keeps my system quick and responsive. I use a tiling window manager
                    called Sway, which is a wayland compositor. I like wayland because I
                    find it to be way more responsive/smooth than Xorg. I integrated
                    Sway with gnome services via
                    <a href="https://github.com/RobinBoers/sway-gnome">sway-gnome</a>.
                </p>
                <h2 id="webbrowsers">🦊 Webbrowsers</h2>
                <p>
                    For most of my webbrowsing needs I use Firefox. I absolutely
                    don&#39;t like the new proton design, so I reverted it to the old
                    Photon look with css files. I also use this Firefox theme:
                    <a
                        href="https://addons.mozilla.org/en-US/firefox/addon/photon-colors"
                        >https://addons.mozilla.org/en-US/firefox/addon/photon-colors</a
                        >
                </p>
                <p>
                    I also use Chromium to test my projects in another browser and if I
                    need to use some Chrome-only app or API.
                </p>
                <p>
                    See my
                    <a href="https://github.com/RobinBoers/firefox-tweaks"
                        >firefox-tweaks</a
                        >
                    repo for my current Firefox setup.
                </p>
                <h3 id="browser-extensions">Browser extensions</h3>
                <ul>
                    <li>
                        <strong>Dark reader:</strong> dark mode for websites that
                        don&#39;t support it out-of-the-box -
                        <a
                            href="https://addons.mozilla.org/en-US/firefox/addon/darkreader/"
                            ></a
                            >
                        <a
                            href="https://chrome.google.com/webstore/detail/dark-reader/eimadpbcbfnmbkopoojfekhnkhdbieeh"
                            ></a
                            >
                    </li>
                    <li>
                        <strong>Don&#39;t track me Google:</strong> removes tracking info
                        from links -
                        <a
                            href="https://addons.mozilla.org/en-US/firefox/addon/dont-track-me-google1/"
                            ></a
                            >
                        <a
                            href="https://chrome.google.com/webstore/detail/dont-track-me-google/gdbofhhdmcladcmmfjolgndfkpobecpg?hl=en"
                            ></a
                            >
                    </li>
                    <li>
                        <strong>DuckDuckGo Privacy Essentials:</strong> see tracking and
                        privacy info for sites -
                        <a
                            href="https://addons.mozilla.org/en-US/firefox/addon/duckduckgo-for-firefox/"
                            ></a
                            >
                        <a
                            href="https://chrome.google.com/webstore/detail/duckduckgo-privacy-essent/bkdgflcldnnnapblkhphbgpggdiikppg?hl=en"
                            ></a
                            >
                    </li>
                    <li>
                        <strong>Enhancer for YouTube:</strong> remove ads and get cool
                        features -
                        <a
                            href="https://addons.mozilla.org/en-US/firefox/addon/enhancer-for-youtube/"
                            ></a
                            >
                        <a
                            href="https://chrome.google.com/webstore/detail/enhancer-for-youtube/ponfpcnoihfmfllpaingbgckeeldkhle"
                            ></a
                            >
                    </li>
                    <li>
                        <strong>Facebook Container:</strong> eses container tabs to
                        isolate Facebook tracking -
                        <a
                            href="https://addons.mozilla.org/en-US/firefox/addon/facebook-container/"
                            ></a
                            >
                    </li>
                    <li>
                        <strong>File icons for GitHub:</strong> nice file icons in GitHub
                        -
                        <a
                            href="https://addons.mozilla.org/en-US/firefox/addon/github-file-icons/"
                            ></a
                            >
                        <a
                            href="https://chrome.google.com/webstore/detail/file-icons-for-github-and/ficfmibkjjnpogdcfhfokmihanoldbfe?hl=en"
                            ></a
                            >
                    </li>
                    <li>
                        <strong>OctoLinker:</strong> links projects and dependencies used
                        in code -
                        <a
                            href="https://addons.mozilla.org/en-US/firefox/addon/octolinker/"
                            ></a
                            >
                        <a
                            href="https://chrome.google.com/webstore/detail/octolinker/jlmafbaeoofdegohdhinkhilhclaklkp?hl=en"
                            ></a
                            >
                    </li>
                    <li>
                        <strong>Svelte devtools:</strong> devtools for svelte -
                        <a
                            href="https://addons.mozilla.org/en-US/firefox/addon/svelte-devtools/"
                            ></a
                            >
                        <a
                            href="https://chrome.google.com/webstore/detail/svelte-devtools/ckolcbmkjpjmangdbmnkpjigpkddpogn"
                            ></a
                            >
                    </li>
                    <li>
                        <strong>uBlock origin:</strong> blocks ads :) -
                        <a
                            href="https://addons.mozilla.org/en-US/firefox/addon/ublock-origin/"
                            ></a
                            >
                        <a
                            href="https://chrome.google.com/webstore/detail/ublock-origin/cjpalhdlnbpafiamejdnhcphjbkeiagm?hl=en"
                            ></a
                            >
                    </li>
                    <li>
                        <strong>Web Archives:</strong> see earlier versions of sites -
                        <a
                            href="https://addons.mozilla.org/en-US/firefox/addon/view-page-archive/"
                            ></a
                            >
                        <a
                            href="https://chrome.google.com/webstore/detail/web-archives/hkligngkgcpcolhcnkgccglchdafcnao?hl=en"
                            ></a
                            >
                    </li>
                </ul>
                <h2 id="cli">🛠️ CLI</h2>
                <p>
                    My shell is fish. I like the amazing autocomplete and color support
                    it has. I use starship prompt because it requires not configuration
                    at all, looks amazing and works for all shells (meaning my shell
                    looks the same if I switch to bash for some reason).
                </p>
                <ul>
                    <li><strong>gh:</strong> github CLI</li>
                    <li><strong>git:</strong> version control</li>
                    <li><strong>nvim:</strong> for quick edits on the commandline</li>
                    <li><strong>htop &amp; gtop:</strong> taskmanagers</li>
                    <li><strong>yt-dlp:</strong> download videos</li>
                    <li><strong>spotdl:</strong> download spotify playlists</li>
                    <li><strong>flatpak:</strong> cross-platform apps</li>
                    <li><strong>pnpm:</strong> package manager for node</li>
                    <li>
                        <strong>bat:</strong> replacement for <code>cat</code> and pager
                        for <code>man</code>
                    </li>
                    <li><strong>fd:</strong> replacement for <code>find</code></li>
                    <li><strong>ripgrep:</strong> replacement for <code>grep</code></li>
                    <li><strong>delta:</strong> improved git diff</li>
                    <li>
                        <strong>cmatrix:</strong> showing my friends I&#39;m a real bad
                        hacker
                    </li>
                    <li><strong>ranger:</strong> file managment</li>
                    <li><strong>ncmpcpp:</strong> music player</li>
                    <li><strong>tldr:</strong> better man pages</li>
                </ul>
                <h2 id="code-editor">💾 Code editor</h2>
                <p>
                    My favorite code editor is VSCode. I did use both Brackets and Atom
                    for some time, but VSCode is just the perfect fit for me. It loads
                    quick and has lots of useful extensions.
                </p>
                <p>
                    VSCode also syncs my setup across machines using settings sync with
                    my GitHub account.
                </p>
                <h3 id="extensions">Extensions</h3>
                <ul>
                    <li>
                        <a
                            href="https://marketplace.visualstudio.com/items?itemName=formulahendry.auto-close-tag"
                            >Auto close tag</a
                            >
                        - closes HTML and XML tags
                    </li>
                    <li>
                        <a
                            href="https://marketplace.visualstudio.com/items?itemName=formulahendry.auto-rename-tag"
                            >Auto rename tag</a
                            >
                        - rename tags easier
                    </li>
                    <li>
                        <a
                            href="https://marketplace.visualstudio.com/items?itemName=CoenraadS.bracket-pair-colorizer"
                            >Bracket pair Colorizer</a
                            >
                        - makes reading code with a lot of brackets easier
                    </li>
                    <li>
                        <a
                            href="https://marketplace.visualstudio.com/items?itemName=streetsidesoftware.code-spell-checker"
                            >Code spell checker</a
                            >
                        - because I cant write nice things
                    </li>
                    <li>
                        <a
                            href="https://marketplace.visualstudio.com/items?itemName=kamikillerto.vscode-colorize"
                            >colorize</a
                            >
                        - makes colors in text colored
                    </li>
                    <li>
                        <a
                            href="https://marketplace.visualstudio.com/items?itemName=makman12.copypasta"
                            >CopyPasta</a
                            >
                        (my <a href="https://github.com/RobinBoers/CopyPasta">fork</a>) -
                        pulls stuff from StackOverflow (GitHub copilot at home :joy:)
                    </li>
                    <li>
                        <a
                            href="https://marketplace.visualstudio.com/items?itemName=JakeBecker.elixir-ls"
                            >ElixirLS</a
                            >
                        - elixir language support
                    </li>
                    <li>
                        <a
                            href="https://marketplace.visualstudio.com/items?itemName=ouven.vscode-yab-for-eex-leex"
                            >YAB for eex/leex</a
                            >
                        - formatting for eex and leex files
                    </li>
                    <li>
                        <a
                            href="https://marketplace.visualstudio.com/items?itemName=dbaeumer.vscode-eslint"
                            >ESLint</a
                            >
                    </li>
                    <li>
                        <a
                            href="https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode"
                            >Prettier</a
                            >
                        - Code formatter
                    </li>
                    <li>
                        <a
                            href="https://marketplace.visualstudio.com/items?itemName=tombonnike.vscode-status-bar-format-toggle"
                            >Formatting toggle</a
                            >
                        - I dont like code formatting always
                    </li>
                    <li>
                        <a
                            href="https://marketplace.visualstudio.com/items?itemName=bierner.github-markdown-preview"
                            >GitHub markdown preview</a
                            >
                        - make built-in preview look like GitHub
                    </li>
                    <a>
                    <a
                        href="https://marketplace.visualstudio.com/items?itemName=ecmel.vscode-html-css"
                        >HTML CSS support</a
                        >
                    </li>
                    <li>
                        <a
                            href="https://marketplace.visualstudio.com/items?itemName=dcasella.i3"
                            >i3</a
                            >
                        - support for i3 config syntax
                    </li>
                    <li>
                        <a
                            href="https://marketplace.visualstudio.com/items?itemName=Zignd.html-css-class-completion"
                            >IntelliSense for CSS class names in HTML</a
                            >
                    </li>
                    <li>
                        <a
                            href="https://marketplace.visualstudio.com/items?itemName=arcensoth.language-mcfunction"
                            >language-mcfunction</a
                            >
                        - support for minecraft datapacks
                    </li>
                    <li>PHP IntelliSense</li>
                    <li>
                        <a
                            href="https://marketplace.visualstudio.com/items?itemName=felixfbecker.php-debug"
                            >PHP debug</a
                            >
                    </li>
                    <li>
                        <a
                            href="https://marketplace.visualstudio.com/items?itemName=felixfbecker.php-pack"
                            >PHP Extension Pack</a
                            >
                    </li>
                    <li>
                        <a
                            href="https://marketplace.visualstudio.com/items?itemName=PhonicCanine.micro-bit"
                            >micro:bit</a
                            >
                    </li>
                    <li>
                        <a
                            href="https://marketplace.visualstudio.com/items?itemName=dlasagno.rasi"
                            >Rasi</a
                            >
                        - rofi config format
                    </li>
                    <li>
                        <a
                            href="https://marketplace.visualstudio.com/items?itemName=svelte.svelte-vscode"
                            >Svelte for VS Code</a
                            >
                    </li>
                    <li>
                        <a
                            href="https://marketplace.visualstudio.com/items?itemName=redhat.vscode-xml"
                            >XML</a
                            >
                        and
                        <a
                            href="https://marketplace.visualstudio.com/items?itemName=redhat.vscode-yaml"
                            >YAML</a
                            >
                    </li>
                    <li>
                        <a
                            href="https://marketplace.visualstudio.com/items?itemName=eamodio.gitlens"
                            >GitLens</a
                            >
                        - git but cooler
                    </li>
                    <li>
                        <a
                            href="https://marketplace.visualstudio.com/items?itemName=ms-python.vscode-pylance"
                            >Pylance</a
                            >
                        &amp;
                        <a
                            href="https://marketplace.visualstudio.com/items?itemName=ms-python.python"
                            >Python</a
                            >
                        - python support
                    </li>
                </ul>
                <h3 id="theming">Theming</h3>
                <p>
                    I like my editor, like most programmers, to be dark. My favorite
                    dark themes are:
                </p>
                <ul>
                    <li>
                        <p>
                            <a href="https://github.com/RobinBoers/frontend-delight-vscode"
                                >Frontend Delight Dark</a
                                >.<br />This is the color theme I&#39;m also using in Alacritty,
                            Spotify, Firefox and other apps.
                        </p>
                    </li>
                    <li>
                        <p>
                            <a
                                href="https://marketplace.visualstudio.com/items?itemName=GitHub.github-vscode-theme"
                                >GitHub Dark</a
                                >.<br />This is the old GitHub dark theme for VSCode. The new
                            one is called GitHub Dark Default.
                        </p>
                    </li>
                </ul>
                <p>
                    I also like
                    <a
                        href="https://marketplace.visualstudio.com/items?itemName=teabyii.ayu"
                        >Ayu dark</a
                        >,
                    <a
                        href="https://marketplace.visualstudio.com/items?itemName=enkia.tokyo-night"
                        >Tokyo Night</a
                        >
                    and
                    <a
                        href="https://marketplace.visualstudio.com/items?itemName=teabyii.ayu"
                        >Ayu Light</a
                        >, but rarely use light mode. For file icons is use
                    <a
                        href="https://marketplace.visualstudio.com/items?itemName=wayou.vscode-icons"
                        >vscode-icons</a
                        >, and for product icons I use
                    <a
                        href="https://marketplace.visualstudio.com/items?itemName=miguelsolorio.fluent-icons"
                        >Fluent icons</a
                        >.
                </p>
                <p>
                    My favorite font is
                    <a href="https://github.com/dejavu-fonts/dejavu-fonts"
                        >DejaVu Sans Mono</a
                        >. For VSCode I&#39;m using a version called
                    <a href="https://github.com/SSNikolaevich/DejaVuSansCode"
                        >DejaVu Sans Code</a
                        >, which has ligatures support.
                </p>
                <h2 id="apps">📒 Apps</h2>
                <p>These are the GUI apps I use on a day to day basis:</p>
                <ul>
                    <li><strong>Thunderbird:</strong> Mail and IRC client</li>
                    <li><strong>Obsidian:</strong> Markdown Notes</li>
                    <li><strong>Rofi:</strong> Desktop and run launcher</li>
                    <li><strong>Slack &amp; Discord:</strong> Chatting</li>
                    <li><strong>Feh:</strong> Image viewer &amp; wallpaper setter</li>
                    <li><strong>Mousepad:</strong> GUI text editor</li>
                    <li><strong>FileZilla:</strong> FTP client</li>
                    <li><strong>Portmaster:</strong> Firewall</li>
                    <li><strong>Alacritty:</strong> Terminal emulator</li>
                    <li><strong>VLC media player:</strong> Media player</li>
                    <li><strong>Lockwise:</strong> Password manager</li>
                    <li><strong>Tofu:</strong> 2FA authenticator</li>
                </ul>
                <h2 id="mentioned">👀 Mentioned</h2>
                <ul>
                    <li>
                        <a href="https://github.com/RobinBoers/firefox-tweaks"
                            >firefox-tweaks</a
                            >
                        - firefox setup
                    </li>
                    <li>
                        <a href="https://github.com/RobinBoers/sway-gnome">sway-gnome</a>
                        - gnome integration via systemd for sway
                    </li>
                    <li>
                        <a href="https://github.com/RobinBoers/frontend-delight-vscode"
                            >frontend-delight-vscode</a
                            >
                        - vscode them
                    </li>
                    <li>
                        <a href="https://github.com/RobinBoers/CopyPasta">CopyPasta</a> -
                        github copilot at home
                    </li>
                </ul>
                <p>
                    Written by Robin Boers. Inspired by
                    <a href="https://github.com/divyanshu013/linux-dev-setup"
                        >divyanshu013/linux-dev-setup</a
                        >.
                </p>
            </section>
        </article>
    </main>

    <footer class="page-footer">
        &copy; <?php echo date("Y"); ?> Robin Boers. Webdesigner and Elixir programmer since 2017.
    </footer>
</body>

</html>