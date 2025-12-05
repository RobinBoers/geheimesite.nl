---
title: HotFox: RSS superpowers for Firefox
date: 2024-03-20
---

A few weeks ago, I ran across an old article about XUL, a XML variant developed by Mozilla for use in the Firefox interface. They killed it a few years ago in favor of HTML, once again leaving behind their tried-and-tested solutions in their ever-lasting chase to be as cool and hot as Google and its Chromium project. So, to try it out anyway, I installed [Pale Moon](//palemoon.org), a Firefox fork that has kept the traditional XUL interface in its former glory.

Part of said traditional interface was a subscribe button that popped up in the toolbar while visiting some sites. When clicked, it showed a list of all web feeds that the site exposed. By selecting one of them, or by simply visiting the feed URL, you got this fancy feed preview with an option to subscribe to it with your favorite RSS reader.

Why exactly did "modern" browsers remove this? When I visit an RSS feed in contemporary Firefox, I get this monstrosity:

<figure>
  <img src="https://cdn.geheimesite.nl/images/blog/rss-plain.png" alt="">
  <figcaption>A bunch of confusing XML. Ew, that looks disgusting.</figcaption>
</figure>

Why doesn't the browser give me the ability to subscribe to a feed (anymore)? [Why is it left for developers to figure out](//www.feed.style), when it should obviously be the browser's job?

In an attempt to right this wrong once and for all, I built HotFox, a browser extension. It does two things:

- It adds a button to the toolbar that shows if a site exposes web feeds.
- It makes unstyled RSS feeds readable; turning the absolute mess from before into a more pleasant preview:

<figure>
  <img src="https://cdn.geheimesite.nl/images/blog/rss-fancy.png" alt="">
  <figcaption>A pretty rendered RSS feed with suybscribe button. Phew, that's better.</figcaption>
</figure>

It's available in the Mozilla Add-ons store, if you'd like to try it:

<a
  class="button"
  href="//addons.mozilla.org/en-US/firefox/addon/hotfox-for-rss/">
  Download
</a>

<aside class="box">
  <h2>FAQ</h2>

  <dl>
    <dt>Why the name?</dt>
    <dd>
      Fire is hot; idk it just sounded cool. There's not really a
      reason.
    </dd>

    <dt>
      Why build a new extension when
      <a href="//addons.mozilla.org/en-US/firefox/addon/rsspreview/">
        it</a
      >
      <a href="//addons.mozilla.org/en-US/firefox/addon/awesome-rss/">
        already</a
      >
      <a href="//addons.mozilla.org/en-US/firefox/addon/want-my-rss/">
        exists</a
      >?
    </dt>
    <dd>
      Because this seemed like a fun project to learn something about
      developing browser extensions.
    </dd>

    <dt>Will there be a Chrome version?</dt>
    <dd>
      No. I don't use Chrome myself;
      <a
        href="/monocultuur-op-de-browsermarkt">
        I don't like Google's attitude</a
      >.<br />
      But kudos to them--they
      <a
        href="//www.ghacks.net/2022/08/22/google-chrome-is-getting-an-rss-feed-reader-on-desktop/">
        got it built in.
      </a>
    </dd>

    <dt>Where can I get it?</dt>
    <dd>
      On the
      <a
        href="//addons.mozilla.org/en-US/firefox/addon/hotfox-for-rss/">
        Mozilla Add-ons store</a
      >.
    </dd>
  </dl>
</aside>
