---
title: "How it was made"
url: "/how-it-was-made.html"
hideTitle: true
---

<h1 class="mb-0">How my site was built</h1>
<p class="subtitle font-poppins font-semibold">The wonders of the world wide web.</p>

This site is my little gem. I launched it in 2017 and I have been improving and maintaining it ever since. I sometimes call it my personal playground. It is my little corner of the web, a place where I have full creative freedom over my own content. And I love it.

This page provides an insight into the development and design process of building this beauty. Enjoy. At the end of the post, I have linked some good resources for building your own site.

{{< hr >}}

## Framework? No thanks

Some of you might think I built this using some frontend framework like React, Svelte, Phoenix, or Ruby on Rails. But no.

Until Septembre 2022 this site used to be handcoded HTML with some PHP for extra magic. I handcoded everything because it gave me greater control over the appearance and structure of the site. In [Septembre](https://github.com/RobinBoers/geheimesite.nl/pull/3) I converted the site to [hugo](https://gohugo.io), a static site generator. This reduces code replication, and also makes the site A LOT FASTER. I still feel like hugo is a bit boilerplatery, so maybe I'll rewrite it again at some point, using 11ty.

I use [tailwind](https://tailwindcss.com) for the styling. We use it over at Qdentity, and I got so used to it that I decided to also use it for my own site. It allows me to quickly style things in the DOM without UGLY style attributes. It also allows me to write shorter, more expressive CSS files. I enjoy it.

I have a [.htaccess](https://github.com/RobinBoers/geheimesite.nl/blob/master/src/.htaccess) file that handles all the routing for fancy URLs. It removes the file extension, redirects some stuff, and is just overall pretty Poggers.

## Development

I have a script that starts a tailwind process that watches files and a local hugo server for development. I also have a script to build the site and then check it for dead links, validate the HTML, and format it which I use in a GitHub action.

## Hosting

My website is hosted at [bHosted](https://www.bhosted.nl/?ref=97f4c4a4b13e269e12cfd4f0352ba527). They provide reasonably cheap and very reliable shared hosting including PHP, MySQL, DirectAdmin, and PhpMyAdmin. They're a Dutch company, so the servers are close to me (which means better performance). I pay about 30 euros a year for the webhosting, and my overall experience with them is very good.

I also host some stuff on [GitHub pages](https://pages.github.com). The main selling point here is that it's free. Mainly my blog and documentation for projects are hosted using GitHub.

If you're looking for paid hosting I'd definitely go with bHosted. If you're on a budget however, I'd recommend either GitHub pages or [Neocities](https://neocities.org). They're both great. I think GitHub pages is more reliable in the long run since it is part of a company with a steady income, but if you have your own domain name moving hosts isn't a big deal.

## Fonts

I used to just use the default sans-serif font the user had installed, but that's just laziness. I thought long and hard about font selection when I redesigned my website, and I settled for this:

-   Merriweather for the main content
-   <span class="font-poppins">Poppins</span> for headers
-   <span class="font-fira">Fira Sans Condensed</span> for subheadings
-   <span class="font-display">Bungee shade</span> as display font for header

I think these fonts compliment each other, while also creating a nice contrast.

## Blog

My blog is also built using [hugo](https://gohugo.io). I also set up a similar build-pipeline with checks for dead links, formatting and minifying. I developed my own hugo theme with IndieWeb support, based on [neofeed](https://neofeed.dev).

I built my own barebones statistics tracker. It tracks visits, not views, per post. It also has an optional disable trigger using `localStorage` so that my own views aren't tracked. The results are [publicly available](/blog/stats) can be filtered per month and are shown in a simple graph that I built using Chart.js.

## Dynamic pages & APIs

The projects and books pages are both dynamic. That means when the site is deployed using GitHub actions it pulls the latest content from GitHub and Micro.blog to populate the pages. Why you ask? Well, that means I can be lazy and don't have to update my site every time I create a new project or read a new book.

The projects page pulls my repositories from my GitHub account using the GitHub API. The thumbnails shown are screenshot.png files at the root of each project's repository. If there is no such file I display a default empty one using [placeholder.com](https://placeholder.com).

The books page works similarly. It pulls the books from [Micro.blog](https://micro.blog) bookshelves. The problem is that the microblog API requires an access token to get access to the bookshelves, but doesn't allow scopes. That means the token can get access to my entire account, including the ability to comment and post. That's why I built [my own wrapper around the Micro.blog API](https://github.com/RobinBoers/api.geheimesite.nl/blob/master/books/README.md), that hides the token for me.

## Open-source

I open-sourced most of my website, and like my other projects, it can be found on my [GitHub profile](https://github.com/RobinBoers/geheimesite.nl).

I haven't yet decided on the license. I want to open-source my site properly, but I also don't want sites that look a lot like mine out there. In short, I'm fine with people using my code for their site, as long as it looks different and isn't just straight up a copy of mine. I also don't want any commercial or patented use. If you know the proper license, please contact me at [hello@geheimesite.nl](mailto:hello@geheimesite.nl).

I've also open-sourced the blogging software I built for [my neolog](https://micro.geheimesite.nl), called neopub. It can be found here: [github.com/neopublished/neopub](https://github.com/neopublished/neopub). It is licensed under the Apache License 2.0.

## CI/CD

For CI/CD I'm using GitHub actions since all of my code is also hosted on GitHub. I know GitHub isn't open-source and I should probably use Gitea or GitLab, but you know, old habits.

All projects that have documentation hosted using GitHub pages (on docs.geheimesite.nl) have CD to build and deploy new docs on push to the master branch. My website and neolog are being deployed using [FTP-Deploy-Action](https://github.com/marketplace/actions/ftp-deploy).

{{< hr >}}

## As promised...

Thanks for reading all of that (or just scrolling to the bottom). I hope you learned some things. If anything about this page was unclear, don't hesitate to shoot me an email at [hello@geheimesite.nl](mailto:hello@geheimesite.nl). Now, as promised, here are some resources for building your own site:

-   <https://sadgrl.online/webmastery>
-   <https://learn.sadgrl.online>
-   <https://digital.com/tools/html-cheatsheet>
-   <https://links.yesterweb.org>
-   <https://neocities.org/tutorials>
-   <https://www.internetingishard.com>
