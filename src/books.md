---
title: Books
---

{% container %}
  <h1>{{ title }}</h1>

  This is my little library. The bookshelves below contain all books I've read in the
  last couple of years. Most of them anyway.
{% endcontainer %}

{% for year in years %}
  {% container %}
    {% hr %}
    <h2>{{ year }}</h2>
  {% endcontainer %}
  <ul class="books">
    {%- for book in books[year] -%}
      <li>
        <h3 class="title">{{ book.title }}</h3>
        <span class="author">{{ book.author }}</span>
        <a href="{{ book.url }}">
          <img src="/books/{{ book.cover }}">
        </a>
      </li>
    {%- endfor -%}
  </ul>
{% endfor %}
