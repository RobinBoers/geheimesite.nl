---
title: "Colophon"
url: "/colophon.html"
---

This site and my blog are built using [Hugo](https://gohugo.io), a static site generator. They're built to be as lightweight as possible and make use of semantic HTML.

The site is built on [GitHub actions](https://github.com/RobinBoers/geheimesite.nl/actions) and deployed using [FTP-Deploy-Action](https://github.com/SamKirkland/FTP-Deploy-Action). My site is hosted at [bHosted](https://www.bhosted.nl/?ref=97f4c4a4b13e269e12cfd4f0352ba527) and my blog is hosted using [GitHub Pages](https://pages.github.com).

All [valid HTML](https://validator.w3.org/nu/?doc=https://geheimesite.nl) and [valid CSS](https://jigsaw.w3.org/css-validator/validator?uri=https://geheimesite.nl/assets/css/main.css).

All content is written in Markdown using [neovim](https://neovim.io).

CSS is generated using [tailwindcss](https://tailwindcss.com).

I have a [.htaccess](https://github.com/RobinBoers/geheimesite.nl/blob/master/src/.htaccess) file that handles all the routing for fancy URLs.

The [book page](/en/books) is rendered using data from [Micro.blog bookshelves](https://micro.blog).

HTML files are cached for one day, and images and fonts are cached indefinitely.

[OPML](/subscriptions) file and [sitemap](/en/sitemap.xml) are rendered nicely using [XSL stylesheets](https://github.com/RobinBoers/geheimesite.nl/tree/master/src/static/assets/xsl).

[Merriweather](https://fonts.google.com/specimen/Merriweather) is used for the main content, [Fira Sans Condensed (Light 300 Italic)](https://fonts.google.com/specimen/Fira+Sans+Condensed) for the headings and [Bungee Shade](https://fonts.google.com/specimen/Bungee+Shade) for the header. Code blocks use the default monospace font. All fonts are self-hosted [to prevent Google from tracking my visitors](https://www.brycewray.com/posts/2020/08/google-fonts-privacy/).

I built my own barebones statistics tracker. It tracks visits, not views, per post. It also has an optional disable trigger using `localStorage` so that my own views aren't tracked. The results are [publicly available](/blog/stats) can be filtered per month and are shown in a simple graph that I built using Chart.js.

<span hidden>Post information</span> {{< link-icon url="https://blog.geheimesite.nl/en/post/history-of-my-site/" label="Blogpost" >}}
