---
title: Challenge accepted
date: 2024-04-23
favorite: true
---

A while back, I read [<cite>Let's make the indie web easier</cite>](//gilest.org/indie-easy.html), and it really resonated with me.

<blockquote cite="https://gilest.org/indie-easy.html">
  <p>OK, developers, I have a challenge for you.</p>
  <p>
    I'll assume that we're all on board with the 2024 indie web revival.
    We all want things to get weird again, right? Yeah.
  </p>
  <p>
    And, I'll assume we all agree that owning your own website is a good
    thing, and we all want more people to do it.
  </p>
  <p>
    But here's the thing: we need more tools for it. We need simpler
    tools for it. And we need to make installing and using them
    trivially simple.
  </p>
  <p>We need a whole galaxy of options.</p>
  <p>
    So that next time we say to someone: “You should own your own
    domain, and publish on your own website,” and they answer with
    “How?”, we can give an answer that's more than just: “Install
    Wordpress.”
  </p>
  <p>
    If we want the future web we're all clamouring for, we need to give
    people more options for self-hosted independence. If we seriously,
    truly want the independent, non-enshittified personal web to
    flourish, we need to make it easier for people to join in.
  </p>
  <p>
    Why not build static website generators that people can just unzip,
    upload to the shared hosting they've just paid for, and start using
    via a browser?
  </p>
</blockquote>

Challenge accepted!

I'm building a successor to [neopub](//micro.geheimesite.nl), my microblogging platform. It's still in early development, but things are going great so far. It's loosely based on the original source code of neopub--which is why its repo is hosted under the neopub namespace--, but has been rewritten from the ground up.

Here's the idea:

A single-person microblogging platform written in PHP8, built on open standards. It supports [microformats2](//microformats.org), [micropub](//w3.org/TR/micropub), [Webmention](//w3.org/TR/webmention/), pingback, various feeds, [ActivityPub](//w3.org/TR/activitypub/) and [OpenHeart](//openheart.fyi), along with [@mentions](//personal-web.org), which I [recently implemented on this site](/mentions) as well. There's going to be a very basic web interface for writing posts and uploading images. Additionally, there will also be a CLI--I'm gonna be using it myself, after all.

To circle back to @giles's post, I'm designing this thing to :sparkles: just work :sparkles:, Out Of The Box(TM). Because [defaults matter](/defaults). People aren't going to bother figuring out how to setup some obscure plugin to enable some weird protocol they've never heard of--but they might just like it when their site automagically federates with various social media platforms and pulls in comments from each one.

And to reemphasize his point: *installing this thing should be trivially simple*. It should be as simple as creating an account on Bluesky. Cause if it's not, what's stopping people from just switching to another content silo?
<small>(I'm using the <a href="/stupid-terminology">c-word</a> on purpose. These corporations don't care what you post, as long as they can make money off of it.)</small>

Since the platform is written in PHP, it should work on virtually all shared hosting, provided they have an up-to-date PHP installation. Installing should be as simple as drag and dropping some PHP files over FTP. To reduce friction even more, I'm using JSON files instead of an SQL database, as setting up and connecting an SQL database is often a mayor roadblock in installing a CMS, for a casual person.

I'm also thinking about creating some sort of hosted application that integrates with a bunch of common registrars, which would guide newcomers through getting a domain name, picking a hosting plan and uploading said PHP files. Pick a domain name, pick a registrar, pick a plan, and have the service handle the rest for you.

Anyhow.

So far, I've implemented Webmention (both sending and receiving), micropub (with a media endpoint), pingback (using  [Webmention.io](//webmention.io) to forward pingbacks as webmentions), and RSS, Atom, JSON feeds. However, I'm still trying to figure out how the actual fuck ActivityPub works, and the frontend is nowhere near finished.

[Here's the prototype, if you're curious](//git.dupunkto.org/~dupunkto/pubb). It doesn't have a name yet, tho. Any suggestions?
