---
title: "Colophon"
translationKey: colophon
---

This site and my blog are built using [Hugo](https://gohugo.io), a static site generator. They're built to be as lightweight as possible and make use of semantic HTML.

The site is built on push using [bix](https://git.geheimesite.nl/libre0b11/bix) and deployed using [rsync](https://en.wikipedia.org/wiki/Rsync). My site is hosted at [bHosted](https://www.bhosted.nl/?ref=97f4c4a4b13e269e12cfd4f0352ba527) and my blog is hosted using [GitHub Pages](https://pages.github.com).

All [valid HTML](https://validator.w3.org/nu/?doc=https://geheimesite.nl) and [valid CSS](https://jigsaw.w3.org/css-validator/validator?uri=https://geheimesite.nl/assets/css/main.css), which is generated using [tailwindcss](https://tailwindcss.com). All content is written in Markdown using [neovim](https://neovim.io).

I have a [.htaccess](https://github.com/RobinBoers/geheimesite.nl/blob/master/src/.htaccess) file that handles all the routing for fancy URLs and caching as well. HTML files are cached for one day, and images and fonts are cached indefinitely.

My [sitemap](/en/sitemap.xml) is being rendered nicely using [XSL stylesheets](https://github.com/RobinBoers/geheimesite.nl/tree/master/src/static/assets/xsl).

[Your system font](https://systemfontstack.com/) is used for the main content, and the system serif font for headings. Code blocks use the default monospace font. All other fonts (on other subdomains) are self-hosted [to prevent Google from tracking my visitors](https://www.brycewray.com/posts/2020/08/google-fonts-privacy/).

I built my own barebones statistics tracker. It tracks visits, not views, per post. It also has an optional disable trigger using `localStorage` so that my own views aren't tracked. The results are [publicly available](/blog/stats) can be filtered per month and are shown in a simple graph that I built using Chart.js.

I do not store your personal information in any way. [Privacy statement](/en/privacy).

<span hidden>Relevant links</span> {{< link-icon url="https://blog.geheimesite.nl/en/post/history-of-my-site/" label="Blogpost" >}}
