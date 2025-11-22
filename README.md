# Roblog.nl

This repo contains the source code of [Roblog.nl](//roblog.nl), my
personal website and blog. It's built with a bunch of illegible shell scripts
and beautiful handcrafted HTML.

It's basically my own SSG written in pure Bash.

## Bakefile

Bakefile is my Bash-based alternative for Makefile. This shell script used to be
giant, but I've since offloaded most work to smaller, reusable programs in my
`~/bin` directory.

The two most important pieces of software are:

- [`tpp`](//git.dupunkto.org/~axcelott/tpp),
a general-purpose text preprocessor with Bash-like syntax.

- [`recipe`](//git.dupunkto.org/~meta/dotfiles/tree/bin/recipe),
which provides Make-like incremental rebuilds based on modification timestamps.

To run a command from the Bakefile, you can simply source it in your shell and
run the appropriate subcommand:

```bash
source Bakefile
build
```

...or you could use my program
[`bake`](//git.dupunkto.org/~meta/dotfiles/tree/bin/bake), which does that
for you--along with a little more magic.

## Preprocessing

I handcoded everything in pure HTML, which gets preprocessed by
[`tpp`](//git.dupunkto.org/~axcelott/tpp), a general-purpose text preprocessor
inspired by `cpp`.

Using `tpp`, I can easily inject environment variables and output of shell
commands into my HTML. This way, I can script away annoying tasks and also
dynamically generate content at build-time.

This allows me to write in HTML (a great language), without having to deal with
HTML (a shitty language).

## Other niceties

There's a `bake dev` mode that runs the site on `localhost:4000` with instant
rebuilds when I change something--it's still a bit buggy tho.

The stylesheet URL is automatically appended with `?v=SHA`, for cachebusting.

There's pretty good linting, using [`stylelint`](//stylelint.io),
[`vnu`](//git.dupunkto.org/forks/vnu) (HTML validator), and
[`achecker`](//github.com/IBMa/equal-access).

All files are formatted using [`prettier`](//prettier.io).

The site can be redeployed without needing to `git push` (which wasn't possible
when I was using GitHub Actions), because I'm using `rsync` (orchestrated using
[`lift`](//git.dupunkto.org/~meta/dotfiles/tree/bin/lift)).

I use a very strict CSP that prohibits any JavaScript, as to not tempt myself to
use it too much.

## License

The source code for the site is licensed AGPL. The content of the site is
released into the public domain, using the CC0 1.0 license.