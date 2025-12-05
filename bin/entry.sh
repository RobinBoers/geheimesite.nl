#!/usr/bin/env bash
# Renders a blogpost and writes to index.tsv

set -euo pipefail

case ${1:-} in
  -h|--help)
    echo "Usage: $(basename $0) <INPUT> <OUTPUT>"
    echo
    exit
    ;;
esac

IFS=$'\t' read -r TITLE DATE FAVORITE LANGUAGE RSSONLY < <(frontmatter.sh "$1" title date favorite=false language=en rssonly=false)

export TITLE DATE FAVORITE LANGUAGE RSSONLY
export CONTENT=$(sed '1,/^---$/d; 1,/^---$/d' "$1" | smu)

$PP inc/entry.html -o $2

touch src/index.tsv

KEY="${1#src}"

{ grep -v "^$KEY	" src/index.tsv || true
  printf '%s\t%s\t%s\t%s\t%s\t%s\n' "$KEY" "$TITLE" "$DATE" "$FAVORITE" "$LANGUAGE" "$RSSONLY"
} > /tmp/index.tsv && mv /tmp/index.tsv src/index.tsv
