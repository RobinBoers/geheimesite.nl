#!/usr/bin/env bash
# Converts blogposts to HTML and indexes them.

set -euo pipefail

case ${1:-} in
  -h|--help)
    echo "Usage: $(basename $0) <INPUT> <OUTPUT> <TSV>"
    echo
    exit
    ;;
esac

IFS=$'\t' read -r TITLE DATE FAVORITE LANGUAGE RSSONLY < <(frontmatter.sh "$1" title date favorite=false language=en rssonly=false)

export TITLE DATE FAVORITE LANGUAGE RSSONLY
export CONTENT=$(sed '1,/^---$/d; 1,/^---$/d' "$1" | $MD)

$PP inc/entry.html -o $2

rm -f /tmp/index.tsv
touch src/${3:-index.tsv} /tmp/index.tsv

{ grep -v "^$1	" src/${3:-index.tsv} || true
  printf '%s\t%s\t%s\t%s\t%s\t%s\n' "$1" "$TITLE" "$DATE" "$FAVORITE" "$LANGUAGE" "$RSSONLY"
} > /tmp/index.tsv && mv /tmp/index.tsv src/${3:-index.tsv}
