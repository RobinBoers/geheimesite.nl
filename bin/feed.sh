#!/usr/bin/env bash
# Generates RSS/Atom & microformats feeds from index.tsv.

set -euo pipefail

required pup

usage() {
  echo "Usage: $(basename $0) <OPTS> <TSV>"
  echo
  echo "OPTIONS"
  echo "  -trss       Generate RSS feed."
  echo "  -tatom      Generate Atom feed."
  echo "  -thtml      Generates HTML index."
  echo "  -h, --help  Show this help."
  echo
  echo "ENVIRONMENT"
  echo "  HOST        The domain the feed is hosted on; defaults to 'localhost'."

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

TSV="${2:-index.tsv}"

generate_rss() {
  local first=true

  list_posts | while IFS=$'\t' read -r path title date _ _ _; do
    if $first; then
      first=false
      echo "<lastBuildDate>$(date -j -f %Y-%m-%d $date +"%a, %d %b %Y") 12:00:00 +0100</lastBuildDate>"
    fi

    local canonical="https://$HOST${path%.md}"

cat <<EOF
<item>
  <title>$(echo "$title" | xml_escape)</title>
  <link>$canonical</link>
  <pubDate>$(date -j -f %Y-%m-%d $date +"%d %b %Y") 12:00:00 +0100</pubDate>
  <guid isPermaLink="true">$canonical</guid>
  <description>
    <![CDATA[
      $(sed '1,/^---$/d; 1,/^---$/d' "./$path" | smu)
    ]]>
  </description>
</item>
EOF
  done
}

generate_atom() {
  local first=true

  list_posts | while IFS=$'\t' read -r path title date _ _ _; do
    if $first; then
      first=false
      echo "<updated>$(date -j -f %Y-%m-%d $date +%Y-%m-%d)T12:00:00+01:00</updated>"
    fi

    local canonical="https://$HOST${path%.md}"
    local published=$(date -j -f %Y-%m-%d $date +%s)
    local modified=$(stat -f %m "./$path")

cat <<EOF
<entry>
  <title>$(echo "$title" | xml_escape)</title>
  <link href="$canonical" />
  <published>$(date -r $published +%Y-%m-%d)T12:00:00+01:00</published>
  <updated>$(date -r $modified +%Y-%m-%d)T12:00:00+01:00</updated>
  <id>$canonical</id>
  <content type="html">
    <![CDATA[
      $(sed '1,/^---$/d; 1,/^---$/d' "./$path" | smu)
    ]]>
  </content>
</entry>
EOF
  done
}

generate_html() {
  echo '<ul class="h-feed">'

  list_posts | while IFS=$'\t' read -r path title date favorite language _; do
    local class="h-entry"
    [ "$favorite" == "true" ] && class="h-entry favorite"

cat <<EOF
<li class="$class">
  <a class="u-url" href="${path%.md}" hreflang="$language">
    <b>
      <time class="dt-published" datetime="$date">$(date -j -f %Y-%m-%d $date +"%b %d, %Y")</time>:
    </b>
    <span class="p-title" lang="$language">$title</span>
  </a>
</li>
EOF
  done

  echo '</ul>'
}

# Helpers

list_posts() {
  if [ "$format" == "html" ]; then
    awk -F'\t' '$6 != "true"' "$TSV"
  else
    cat "$TSV"
  fi | sort -t$'\t' -k3 -r
}

xml_escape() {
  sed 's/&/\&amp;/g; s/</\&lt;/g; s/>/\&gt;/g; s/"/\&quot;/g; s/'\''/\&apos;/g'
}

case $format in
  rss) generate_rss ;;
  atom) generate_atom ;;
  html) generate_html ;;
esac
