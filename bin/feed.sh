#!/usr/bin/env bash
# Generates RSS/Atom & microformats feeds from index.tsv.

set -euo pipefail

required pup

usage() {
  echo "Usage: $(basename $0) <OPTS> <TSV> [OUT]"
  echo
  echo "OPTIONS"
  echo "  -r<PATH>    Relativate URLs."
  echo "  -trss       Generate RSS feed."
  echo "  -tatom      Generate Atom feed."
  echo "  -tjson      Generate JSON feed."
  echo "  -thtml      Generates HTML index."
  echo "  -h, --help  Show this help."
  echo
  echo "If no output file is specified, default to stdout."
  echo
  exit
}

while [[ "${1:-}" == -* ]]; do
  case "$1" in
    -h|--help)
      usage
      ;;
    -trss)
      format=rss
      ;;
    -tatom)
      format=atom
      ;;
    -tjson)
      format=json
      ;;
    -thtml)
      format=html
      ;;
    -flist)
      type=list
      ;;
    -ftable)
      type=table
      ;;
    -r*)
      relative="${1#-r}"
      ;;
    *)
      err "invalid option: $1"
      ;;
  esac
  shift
done

if [ -z "${format:-}" ]; then
  err "missing output format"
fi

TSV="${1:-index.tsv}"
OUT="${2:-}"

if [ -n "$OUT" ]; then
  PATH_INFO="$OUT"
  [ -n "${relative:-}" ] && PATH_INFO="${OUT#$relative}"
  [[ "$PATH_INFO" != /* ]] && PATH_INFO="/$PATH_INFO"
fi

generate_rss() {
  echo '<?xml version="1.0" encoding="utf-8" standalone="yes"?>'
  echo "<rss version='2.0' xmlns:atom='http://www.w3.org/2005/Atom'>"
  echo "<channel>" 

  echo "<title>$(echo "$TITLE" | xml_escape)</title>"
  echo "<description>$(echo "$BIO" | xml_escape)</description>"
  echo "<link>https://${HOST}/</link>"

  if [ -n "${LANGUAGE:-}" ]; then
    echo "<language>${LANGUAGE}</language>"
  fi

  if [ -n "${AUTHOR:-}" -a -n "${EMAIL:-}" ]; then
    echo "<webMaster>${EMAIL} (${AUTHOR})</webMaster>"
  fi

  if [ -n "${RIGHTS:-}" ]; then
    echo "<copyright>$(echo "$RIGHTS" | xml_escape)</copyright>"
  fi

  echo "<atom:link href='https://${HOST}${PATH_INFO:-/rss.xml}' rel='self' type='application/rss+xml' />"

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
      $(sed '1,/^---$/d; 1,/^---$/d' "./$path" | $MD)
    ]]>
  </description>
</item>
EOF
  done

  echo "</channel>"
  echo "</rss>"
}

generate_atom() {
  echo '<?xml version="1.0" encoding="utf-8" standalone="yes"?>'
  echo "<feed xmlns='http://www.w3.org/2005/Atom'>"

  echo "<title>$(echo "$TITLE" | xml_escape)</title>"
  echo "<subtitle>$(echo "$BIO" | xml_escape)</subtitle>"
  echo "<id>https://${HOST}/</id>"
  echo "<link href='https://${HOST}/' />"
  
  if [ -n "${AUTHOR:-}" -a -n "${EMAIL:-}" ]; then
    echo "<author>"
    echo "<name>${AUTHOR}</name>"
    echo "<email>${EMAIL}</email>"
    echo "</author>"
  fi

  if [ -n "${RIGHTS:-}" ]; then
    echo "<rights>${RIGHTS}</rights>"
  fi

  echo "<link href='https://${HOST}${PATH_INFO:-/atom.xml}' rel='self' type='application/rss+xml' />"

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
      $(sed '1,/^---$/d; 1,/^---$/d' "./$path" | $MD)
    ]]>
  </content>
</entry>
EOF
  done

  echo "</feed>"
}

generate_html() {
  case "${type:-list}" in
    list) generate_html_list ;;
    table) generate_html_table ;;
  esac
}

generate_html_list() {
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

generate_html_table() {
  echo '<table class="h-feed">'
  echo '<thead>'
  echo '<tr>'
  echo '<th class="p-name">Post<span hidden>s</span></th>'
  echo '<th>Published</th>'
  echo '</tr>'
  echo '</thead>'
  echo '<tbody>'

  list_posts | while IFS=$'\t' read -r path title date favorite language _; do
    local class="h-entry"
    [ "$favorite" == "true" ] && class="h-entry favorite"

cat <<EOF
<tr class="$class">
  <td class="p-title" lang="$language">
    <a class="u-url" href="${path%.md}" hreflang="$language">
      $title
    </a>
  </td>
  <td>
    <time class="dt-published" datetime="$date">
      $(date -j -f %Y-%m-%d $date +"%b %d, %Y")
    </time>
  </td>
</tr>
EOF
  done

  echo '</tbody>'
  echo '</table>'
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

generate_json() {
  local items="[]"

  list_posts | while IFS=$'\t' read -r path title date _ _ _; do
    local canonical="https://$HOST${path%.md}"
    local published=$(date -j -f %Y-%m-%d $date +%s)
    local modified=$(stat -f %m "./$path")
    local content=$(sed '1,/^---$/d; 1,/^---$/d' "./$path" | $MD)

    items=$(jq -n \
      --argjson items "$items" \
      --arg id "$canonical" \
      --arg url "$canonical" \
      --arg title "$title" \
      --arg content "$content" \
      --arg published "$(date -r $published +%Y-%m-%d)T12:00:00+01:00" \
      --arg modified "$(date -r $modified +%Y-%m-%d)T12:00:00+01:00" \
      '$items + [{
        id: $id,
        url: $url,
        title: $title,
        content_html: $content,
        date_published: $published,
        date_modified: $modified
      }]')
  done

  jq -n \
    --arg version "https://jsonfeed.org/version/1.1" \
    --arg title "$TITLE" \
    --arg home "https://${HOST}/" \
    --arg feed "https://${HOST}${PATH_INFO:-/feed.json}" \
    --arg bio "${BIO:-}" \
    --arg author "${AUTHOR:-}" \
    --arg email "${EMAIL:-}" \
    --arg lang "${LANGUAGE:-}" \
    --argjson items "$items" \
    '{
      version: $version,
      title: $title,
      home_page_url: $home,
      feed_url: $feed
    } +
    (if $bio != "" then {description: $bio} else {} end) +
    (if $author != "" then {authors: [{name: $author} + (if $email != "" then {url: ("mailto:" + $email)} else {} end)]} else {} end) +
    (if $lang != "" then {language: $lang} else {} end) +
    {items: $items}'
}

generate() {
  case $format in
    rss) generate_rss ;;
    atom) generate_atom ;;
    json) generate_json ;;
    html) generate_html ;;
    table) generate_table ;;
  esac
}

if [ -n "$OUT" ]; then
  generate > "$OUT"
else
  generate
fi
