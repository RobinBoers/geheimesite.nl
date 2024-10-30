---
title: Hey, I'm Robin!!
---

{% container %}
  <noscript class="header">
    <h1>{{ title }}</h1>
  </noscript>

  <script>
    const header = document.querySelector(".header");
    const heading = document.createElement("h1");

    header.parentNode.insertBefore(heading, header.nextSibling);

    function type(element, text) {
      if(text == "") return;
      heading.innerHTML += text.charAt(0);
      window.setTimeout(() => type(element, text.slice(1)), 20);
    }

    type(heading, "{{ title }}");
  </script>

  I'm a teenage developer. I write pretty decent software.
{% endcontainer %}

<picture>
  <source srcset="//git.dupunkto.org/api/graph/{{ year }}?m=light&c=f43f5e" media="(prefers-color-scheme: light)"/>
  <source srcset="//git.dupunkto.org/api/graph/{{ year }}?m=dark&c=f43f5e" media="(prefers-color-scheme: dark)"/>

  <img eleventy:ignore src="//git.dupunkto.org/api/graph/{{ year }}?c=f43f5e" alt="" width="100%" style="margin: 1em auto">
</picture>

{% container %}

  [contact](/contact)  ·  [website stability note](/stability)

{% endcontainer %}
