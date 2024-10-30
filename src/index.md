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
  <source srcset="{{ commitGraph.light_href }}" media="(prefers-color-scheme: light)"/>
  <source srcset="{{ commitGraph.dark_href }}" media="(prefers-color-scheme: dark)"/>

  <img eleventy:ignore src="{{ commitGraph.light_href }}" alt="" width="100%" style="margin: 1em auto">
</picture>

{% container %}

  [contact](/contact)  ·  [website stability note](/stability)

{% endcontainer %}
