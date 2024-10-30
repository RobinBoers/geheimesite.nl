---
title: Introducing {du}punkto
date: 2024-02-18
---

Last year, I posted [my thoughts on running a tilde/pubnix](/thinking-about-tilde). In a nutshell, I wanted to experiment with setting up a small tilde, to learn more about Linux and the internet. And after a few months of experimenting, I finally have a system that I'm happy with. So today I'm introducing [{du}punkto](//dupunkto.org), my attempt at building *something*.

In short, {du}punkto is a small group of like-minded people who are sharing a VPS. Everyone has access to the server over SSH or Mosh (handy for areas with wonky connections). The goal is to learn new things about *NIX systems, collaborate on code, experiment, and, above all, have fun. I'm co-maintaining it with [Potsjem](//dupunkto.org/~potsjem), one of my best friends. The website isn't finished yet, but it has a little more info, if you're curious.

Our server is named `du11`, after my web server `s11`, and it's running FreeBSD 13. I opted for BSD because I like the tidy and organized folder structure, large repos, and jails functionality. It's running a bunch of services for developing and  collaborating on software. Most notably:

- Web hosting for every Unix user via a `public_html` folder in their home directory.
- A Gitolite server with a cgit web frontend and mirroring to GitHub and Codeberg.
- FTP storage with a web portal.

It's also possible to run complimentary services in FreeBSD jails, like:

- A CardDAV and CalDAV server for me and my girlfriend.
- A Miniflux instance for personal use.

I'm very excited about it. I'm looking forward to seeing what we're gonna do with it further.

<details>
  <summary>Future plans</summary>

  <ul>
    <li>A handwritten classic Minecraft server.</li>
    <li>
      Gopher and Gemini hosting, using <code>public_gem</code> and
      <code>public_gopher</code> respectively.
    </li>
    <li>
      A VSCode server, similar to <a href="//vscode.dev">vscode.dev</a>.
    </li>
    <li>A Matrix homeserver with Whatsapp bridging.</li>
    <li>A Mastodon or Lemmy instance?</li>
  </ul>
</details>
