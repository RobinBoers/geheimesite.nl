#!/usr/bin/env bash
# Converts Markdown documents to HTML.

set -euo pipefail

case ${1:-} in
  -h|--help)
    echo "Usage: $(basename $0) <INPUT> <OUTPUT> <TSV>"
    echo
    exit
    ;;
esac

IFS=$'\t' read -r TITLE STYLESHEET LANGUAGE < <(frontmatter.sh "$1" title stylesheet language=en)

export TITLE STYLESHEET LANGUAGE
export CONTENT=$(sed '1,/^---$/d; 1,/^---$/d' "$1" | $MD)

$PP inc/article.html -o $2
