---
title: Blog
permalink: "/blog/index.html"
head: >
  <style>
    .h-feed {
      margin-left: 3em;
      padding: 0;
      list-style: none;
    }

    .h-entry a {
      line-height: 1.8;
      text-decoration-color: 
    }

    .favorite {
      position: relative;

      &::before {
        content: "★";
        position: absolute;
        left: -1.5em;
      }
    }

    hgroup > span {
      display: flex;
      gap: 1em;
      align-items: flex-end;
    }
  </style>
---

{% container %}
  <hgroup>
    <span>
      <h1>{{ blog.title }}</h1>
      <a class="inline-button" href="/follow">Subscribe</a>
    </span>
    <p>{{ blog.subtitle }}</p>
  </hgroup>

  {% assign posts = collections.blog | sort: 'date' | reverse %}

  <h2 style="font-size: 1.1em">Selected pieces</h2>

  <ul style="list-style: none; padding: 0;">
    <li lang="en"><a href="/invisible-prisons" hreflang="en">Invisible Prisons: a short story</a></li>
    <li lang="nl"><a href="/stemrecht" hreflang="nl">Stemrecht voor jongeren</a></li>
    <li lang="nl"><a href="/nepnieuws" hreflang="nl">Hoe werkt nepnieuws en wat kan er tegen gedaan worden?</a></li>
    <li lang="nl"><a href="/cryptobros" hreflang="nl">In de ban van de Bitcoin: een beschrijving van cryptobros als subcultuur</a></li>
  </ul>

  <h2 style="font-size: 1.1em">Recent posts</h2>
{% endcontainer %}

<ul class="h-feed">
  {% for post in posts -%}
    {%- unless post.data.rssonly -%}
      <li class="h-entry {% if post.data.favorite %}favorite{% endif %}">
        <a class="u-url" href="{{ post.url }}" hreflang="{{ post.data.language }}">
          <b>
            <time class="dt-published" datetime="{{ post.date | date: "%Y-%m-%d" }}">{{ post.date | date: "%b %d, %Y" }}</time>:
          </b>
          <span class="p-title" lang="{{ post.data.language }}">{{ post.data.title }}</span>
        </a>
      </li>
    {%- endunless -%}
  {%- endfor %}
</ul>
