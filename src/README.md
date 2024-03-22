# Roblog.nl

This repo contains the source code of [Roblog.nl][https://roblog.nl], my
personal website and blog. It contains beautiful handcoded HTML and a bunch of
scripts to manage it.

It's basically my own SSG written in pure Bash.

## Features

- RSS & Atom feeds
- Sitemap with last modified dates
- Image compression
- Custom shortcodes in HTML

### Shortcodes

| Code       | Transformed into |
| ---------- | ---------------- |
| (TM)       | ™               |
| (c)        | ©               |
| :love:     | ♡                |
| :shrug:    | ¯\\_(ツ)\\_/¯    |
| :back:     | ←                |
| :go:       | →                |
| :x:        | ×                |
| :hot:      | 🔥               |
| :sparkles: | ✨               |
| :rocket:   | 🚀               |
| :email:    | ✉️               |
| :video:    | 📺               |
| :audio:    | 🎙️               |

## Setup

The working directory of the repo contains two subdirectories:

- `src` contains the raw HTML source code for the site.
- `dist` contains the built site.

TODO:

- For each file, put the contents of `bin/HEAD.html` right after `<head>`.
- Touch each file with the date of the last git modification.
- For each file in `blog`, get the contents of `article`, `title` and `datetime`
  and put them in - the RSS/Atom/JSON feeds.
