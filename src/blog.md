---
title: Blog
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
  </style>
---

{% container %}
  <hgroup>
    <h1>{{ blog.title }}</h1>
    <p>{{ blog.subtitle }}</p>
  </hgroup>

  {% assign posts = collections.blog | sort: 'date' | reverse %}
{% endcontainer %}

<ul class="h-feed">
  {% for post in posts -%}
    {%- unless post.data.rss-only -%}
      <li class="h-entry {% if post.data.favorite %}favorite{% endif %}">
        <a class="u-url" href="{{ post.url }}">
          <b>
            <time class="dt-published" datetime="{{ post.date | date: "%Y-%m-%d" }}">{{ post.date | date: "%b %d, %Y" }}</time>:
          </b>
          <span class="p-title">{{ post.data.title }}</span>
        </a>
      </li>
    {%- endunless -%}
  {%- endfor %}
</ul>
