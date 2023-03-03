---
title: "Videoroll"
translationKey: youtube
hideTitle: true
menu: "more"
---

<section>
    <h1 class="mb-0 font-serif">YouTube</h1>
    <p class="font-serif small-caps">How to train your algorithm</p>
    <p>
        I watch a lot of YouTube. Actually, I watch too much YouTube. <strong class="bold">Way too much.</strong> But I try to spend my time watching YouTube learning new things. So, these are the best videos I've watched. If you want to train your algorithm or are just looking for some suggestions for science/computer videos, here you are:
    </p>
</section>

{{< videos >}}

{{< supplement >}}
For those interested, I have [an OPML file](/videos.opml) containing RSS feeds for all my favorite content creators on YouTube.
{{< / supplement >}}

<style>
    :root {
        --foreground: 34, 35, 35;
        --background: 240, 240, 246;
        --primary: 255, 70, 70;
    }
    @media (prefers-color-scheme: dark) {
        :root {
            --foreground: 240, 240, 246;
            --background: 34, 35, 35;
            --primary: 255, 70, 70;
        }
    }
    .page-content a {
        font-size: larger;
    }
    .page-content a, em {
        line-height: revert;
        width: max-content;
        max-width: 100%;
    }
    html {
        background: linear-gradient(to right, magenta, orangered);
        background-blend-mode: hue, normal;
        background-position: center;
        background-size: 120%;
    }
    body {
        background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3));
        color: white;
    }

    .page-content {
        background: rgb(var(--background));
        color: rgb(var(--foreground));
        border-top: 7px solid rgb(var(--primary));
        padding-bottom: 27px;
        padding-top: 50px;
    }
</style>
