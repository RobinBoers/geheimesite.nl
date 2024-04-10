# Roblog.nl

This repo contains the source code of [Roblog.nl](https://roblog.nl), my
personal website and blog. It's built with a bunch of illegible shell scripts
and beautiful handcrafted HTML.

It's basically my own SSG written in pure Bash.

## Bakefile

Bakefile is my Bash-based alternative for Makefile (you get it? make + bash =
bake :D). The Bakefile used to be giant, but I've since offloaded most of the
work to smaller, reusable programs in my `~/bin` directory:

- [`bakery`](https://git.dupunkto.org/meta/dotfiles/tree/bin/bakery)
- [`genmap`](https://git.dupunkto.org/meta/dotfiles/tree/bin/genmap)
- [`genfeed`](https://git.dupunkto.org/meta/dotfiles/tree/bin/genmap)
- [`optim`](https://git.dupunkto.org/meta/dotfiles/tree/bin/genmap)
- [`shortc`](https://git.dupunkto.org/meta/dotfiles/tree/bin/genmap)

To run a command from the Bakefile, you can simply source it in your shell and
run the appropriate subcommand:

```bash
source Bakefile
build
```

...or you could use my program
[`bake`](https://git.dupunkto.org/meta/dotfiles/tree/bin/bake), which does that
for you--along with a little more magic.

## Pseudo HTML

I write in a pseudo HTML variant that I dubbed LowTML, which gets converted into
regular HTML by [`lowc`](https://git.dupunkto.org/axcelott/lowc).

This allows me to write in HTML (a great language), without having to deal with
HTML (a shit language).

I also make heavy use of custom shortcodes, like \:shrug\:, which get replaced
with their unicode equivalents by
[`shortc`](https://git.dupunkto.org/meta/dotfiles/tree/bin/shortc).

## Image compression

Images are automatically
[compressed](https://git.dupunkto.org/meta/dotfiles/tree/bin/optim) using
`optipng` and `jpegoptim`.

## Templating

I have a function called `new` (which takes up about half of the Bakefile), that
handles creating new pages using the templates in `/templates`. Just run
`bake new` and let it do the magic for you ;)

## @mentions

My site implements @mentions, inspired by
[Personal-Web.org](https://personal-web.org). For this, I'm using a file in
`$XDG_CONFIG_HOME/lowc/mentions.toml` that contains all the contacts I'd like to
mention:

```toml
[john]
site = "https://example.com"
email = "john.doe@example.com"
mention = true
```

When processing the LowTML, `lowc` will convert any _@handle_ it encounters into
the following snippet, if the handle it's in the `mentions.toml`:

```html
<a
  href="https://example.com"
  data-handle="john"
  data-mention="true"
  class="u-in-reply-to"
  >@john</a
>
```

I then have a command--`bake mentions`--that takes a file path, finds all
@mentions in that file and sends an email for each, using my
[`sendmail`](https://git.dupunkto.org/axcelott/sendmail) program.

If someone doesn't want to receive emails, you can set the `mention = true` to
`mention = false` and the script will skip them.

## Webmentions

In addition to @mentions, I also send [webmentions](https://webmention.net). It
works similarly; after publishing I run the following command:

```shell
bake webmentions
```

...which sends webmentions to any URLs that I've linked to in the post, using
the amazing [`wm`](https://github.com/remy/wm) CLI.

I also built
[my own Webmention endpoint](https://git.dupunkto.org/sites/api.geheimesite.nl/tree/webmentions.php)
that sends me an email whenever someone links to my site.

## Sub--email subscriptions

I built
[my own email subscription](https://git.dupunkto.org/sites/api.geheimesite.nl/tree/sub.php)
_thing_. There's a form on the subscribe page that adds people to the mailing
list. I can then push messages to the mailing list like this (using
[this handy script](https://git.dupunkto.org/meta/dotfiles/tree/bin/push)):

```shell
push $(pass tokens/sub) "Hii!" "$(cat message.txt)"
```

## Other nicities

There's a `bake dev` mode that runs the site on `localhost:4000` with instant
rebuilds when I change something--it's still a bit buggy tho.

There's RSS and Atom feeds and a sitemap that use `git` for last-modified
timestamps.

The stylesheet URL is automatically appended with `?v=SHA`, for cachebusting.

There's pretty good linting, using [`stylelint`](https://stylelint.io),
[`vnu`](https://git.dupunkto.org/forks/vnu) (HTML validator), and
[`achecker`](https://github.com/IBMa/equal-access).

All files are formatted using [`prettier`](https://prettier.io).

The site can be redeployed without needing to `git push` (which wasn't possible
when I was using GitHub Actions), because I'm using `rsync`.

I use a very strict CSP that prohibits any Javascript, as to not tempt myself to
use it too much.

## Future plans

- Check for broken links while linting
- Changelogs using Git history
- Form for submitting webmentions

## License

The source code for the site is licensed AGPL. The content of the site is
released into the public domain, using to the CC0 1.0 license.
