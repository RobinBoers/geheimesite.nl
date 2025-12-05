---
title: The Next Stage of the Web Browser
date: 2024-05-31
---

In his post [<cite>On compositional window management</cite>](//bandukwala.me/on-compositional-window-management/) Alexander Bandukwala explores ways in which window managers could be improved. I can't help but draw parallels to modern web browsers. Applications reimplement the window managers due to the limited feature set. Websites reimplement the web browser in the same way.

[I complained](/blog/web-sdk) in the past, that I want the browser to be <em>just a document reader</em>. But let's face it; it's not. It's really just an SDK. But even for an SDK, it's pretty bad.

Websites keep reimplementing the browser using JS, because the browser *sucks*. Despite all their fancy advertising and redesigns, browser haven't really evolved for the last decade. Yea, they've implemented a bunch more ridiculous Javascript APIs, but what real added value do they provide to the end-user?

Here's some things I'd want in my browser:

- You know all those cookie popups everywhere? What if they were just part of the browser? Currently, every website is allowed to save cookies by default. There's nothing preventing a website from saving cookies anyway when you tap the tiny "no" button. What if we reverse that? Whenever a website tries to save cookies, the browser displays a standard popup with a clear "no" button that actually *denies the cookies*.

- You know how websites have those complicated menus? Yea, what if my browser just scraped their `sitemap.xml` and compiled a convient index of the site for me?

- And while we're at it, why not render a table of contents for every page? You know, those things Wikipedia and numerous other sites are now inserting into their HTML, because our document readers--oh sorry, I meant universal SDKs--still don't have this feature?

- You know how links you've already visited turn purple (unless the website overrides it). What if we would indicate the target location of the link in a similar way? Links to other pages on the same site would stay as-is, but outgoing links would get some kind of extra indication. Also, it would be nice to know the page size of the target page upfront, especially on metered connections.

- Also [bringing back RSS discovery and subscriptions](/blog/hotfox) *properly* would be pretty nice!

- Having publishing built into the browser would truly democratize the Web. Instead of the convoluted form-based UIs we could have a simple HTML editor builtin that could publish using [HTTP PUT](//developer.mozilla.org/en-US/docs/Web/HTTP/Methods/PUT) if the target server supports it.

- Imagine if supporting writers and other creative people was built-in to the Web? A browser-native button to send the author of the page/media element a few bucks would allow creators to passively earn money by creating cool stuff. Maybe we could put [HTTP 402](//developer.mozilla.org/en-US/docs/Web/HTTP/Status/402) <i>Payment Required</i> to good use?

- And finally, how about actually useful building blocks for applications, instead of this JS+form madness we have now? The idea of building up the interface using a markup language such as HTML or XML is very good, but what if we could also utilize OS-native components in our designs?

Could somebody at Google or Mozilla maybe pretty please make (some of) this reality? /hj
