#!/usr/bin/env bash
# Generates RSS/Atom & microformats feeds.

set -euo pipefail

required pup
required jq

usage() {
  echo "Usage: $(basename $0) <OPTS> <JSON>"
  echo
  echo "OPTIONS"
  echo "  -trss       Generate RSS feed."
  echo "  -tatom      Generate Atom feed."
  echo "  -thtml      Generates HTML index."
  echo "  -h, --help  Show this help."
  echo
  echo "ENVIRONMENT"
  echo "  HOST        The domain the feed is hosted on; defaults to 'localhost'."
  echo "  LANGUAGE    The language of posts in the feed."

  exit 0
}

case "${1:-}" in
  ""|-h|--help)
    usage
    ;;
  -trss)
    format=rss
    ;;
  -tatom)
    format=atom
    ;;
  -thtml)
    format=html
    ;;
  *)
    err "invalid option."
esac

JSON=$(cat "${2:-blog.json}")

generate_rss() {
  echo "<lastBuildDate>$(date -j -f %Y-%m-%d $(last_updated) +"%a, %d %b %Y") 12:00:00 +0100</lastBuildDate>"

  list_posts | while read -r slug; do
    generate_rss_entry $slug
  done
}

generate_rss_entry() {
  local c=$(cat blog/$1.html)
  local title=$(echo $JSON | jq -r --arg slug $1 '.[$slug].title')
  local date=$(echo $JSON | jq -r --arg slug $1 '.[$slug].date' | to_epoch)
  local canonical=https://$HOST/blog/$1

  # For the content, we assume it is placed in a semantically
  # <article> element. According to the spec, it should contain the heading.
  # In all my HTML, that's an H1. According to the RSS spec, the <description>
  # *shouldn't* contain an title, so this `sed` command removes it.
  local content=$(sed -n '/<article>/,/<\/article>/p' blog/$1.html | tr -d '\n' | sed 's/<h1>.*<\/h1>//')

cat <<EOF
<item>
  <title>$(echo $title | escape.sh)</title>
  <link>$canonical</link>
  <pubDate>$(date -r $date +"%d %b %Y") 12:00:00 +0100</pubDate>
  <guid isPermaLink="true">$canonical</guid>
  <description>
    <![CDATA[
    $content
    ]]>
  </description>
</item>
EOF
}

generate_atom() {
  echo "<updated>$(date -j -f %Y-%m-%d $(last_updated) +%Y-%m-%d)T12:00:00+01:00</updated>"

  list_posts | while read -r slug; do
    generate_atom_entry $slug
  done
}

generate_atom_entry() {
  local c=$(cat blog/$1.html)
  local title=$(echo $JSON | jq -r --arg slug $1 '.[$slug].title')
  local published=$(echo $JSON | jq -r --arg slug $1 '.[$slug].date' | to_epoch)
  local modified=$(stat -f %m blog/$1.html)
  local canonical=https://$HOST/blog/$1

  # For the content, we assume it is placed in a semantically
  # <article> element. According to the spec, it should contain the heading.
  # In all my HTML, that's an H1. According to the Atom spec, the <description>
  # *shouldn't* contain an title, so this `sed` command removes it.
  local content=$(sed -n '/<article>/,/<\/article>/p' blog/$1.html | tr -d '\n' | sed 's/<h1>.*<\/h1>//')

cat <<EOF
<entry>
  <title>$(echo $title | escape.sh)</title>
  <link href="$canonical" />
  <published>$(date -r $published +%Y-%m-%d)T12:00:00+01:00</published>
  <updated>$(date -r $modified +%Y-%m-%d)T12:00:00+01:00</updated>
  <id>$canonical</id>
  <content type="html">
    <![CDATA[
    $content
    ]]>
  </content>
</entry>
EOF
}

generate_html() {
  echo '<ul class="h-feed">'

  list_posts | while read -r slug; do
    generate_html_entry $slug
  done

  echo '</ul>'
}

generate_html_entry() {
  IFS=$'\t' read -r title date favorite language < <(echo $JSON | jq -r --arg slug $1 '.[$slug] | "\(.title)\t\(.date)\t\(.favorite // false)\t\(.language // "en")"')

  local class="h-entry"
  [ $favorite == true ] && class="h-entry favorite"

cat <<EOF
<li class="$class">
  <a class="u-url" href="/blog/$1" hreflang="$language">
    <b>
      <time class="dt-published" datetime="$date">$(date -j -f %Y-%m-%d $date +"%b %d, %Y")</time>:
    </b>
    <span class="p-title" lang="$language">$title</span>
  </a>
</li>
EOF
}

# Helpers

list_posts() {
  if [ $format == html ]; then
    echo $JSON | jq -r 'to_entries | sort_by(.value.date) | reverse | .[] | select(.value.rssonly != true) | .key'
  else
    echo $JSON | jq -r 'to_entries | sort_by(.value.date) | reverse | .[].key'
  fi
}

last_updated() {
  echo $JSON | jq -r 'to_entries | sort_by(.value.date) | reverse | .[0].value.date'
}

to_epoch() {
  read date; date -j -f %Y-%m-%d $date +%s
}

case $format in
  rss) generate_rss ;;
  atom) generate_atom ;;
  html) generate_html ;;
esac
