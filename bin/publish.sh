#!/bin/sh

H_ENTRY=$(cat <<EOF
<tr class="h-entry">
  <td class="p-title">
    <a class="u-url" href="/$URL">
      $TITLE
    </a>
  </td>
  <td>
    <time class="dt-published" datetime="$(date +%Y-%m-%d)">
      $(date +%b %d, %Y)
    </time>
  </td>
</tr>
EOF
)

RSS_ENTRY=$(cat <<EOF
<item>
  <title>$TITLE</title>
  <link>https://roblog.nl/$URL</link>
  <pubDate>$(date +%d %b %Y) 12:00:00 +0100</pubDate>
  <guid>https://roblog.nl/$URL</guid>
  <content:encoded>
    <![CDATA[
    $CONTENT
    ]]>
  </content:encoded>
</item>
EOF
)

