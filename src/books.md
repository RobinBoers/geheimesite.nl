---
title: Books
---

{% container %}
  <h1>{{ title }}</h1>

  This is my little library. The bookshelves below contain all books I've read in the
  last couple of years. Most of them anyway.

  The data on this page is from the physical bookshelfs in my room, as well as the digital records of our local library. Unfortunately the library records only go back as far as 2018, so this page is far from complete.
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
          <img src="//cdn.geheimesite.nl/images/books/{{ book.cover }}">
        </a>
      </li>
    {%- endfor -%}
  </ul>
{% endfor %}
