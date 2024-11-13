---
title: Music
---

{% container %}
<h1>{{ title }}</h1>

This is my CD collection. And also my wishlist for new music.

<h2>Wishlist</h2>
{% endcontainer %}

<ul class="music">
  {%- for album in wishlist.music -%}
    <li>
      <h3 class="title">{{ album.title }}</h3>
      <span class="author">{{ album.artist }}</span>
      <span class="medium">{{ album.medium }}</span>
      <a href="{{ album.url }}" target="_blank">
        <img src="https://cdn.geheimesite.nl/images/music/{{ album.cover }}" alt="">
      </a>
      <a class="shy-button" href="{{ album.buyUrl }}" target="_blank">Buy</a>
    </li>
  {%- endfor -%}
</ul>

<!--
To download all covers in one go:
cat music.json | jq -r '.[] | "\(.cover) \(.url)"' | while read cover url; do 
  cover_url=$(curl -s "$url" | sed -n 's/.*<meta property="og:image" content="\([^"]*\)".*/\1/p');
  curl -s -o "/tmp/$cover" "$cover_url";
  scp "/tmp/$cover" s11:domains/cdn.geheimesite.nl/public_html/images/music/
done
-->