#!/usr/bin/env bash
# Converts .bib into an APA-compliant HTML reference list using Pandoc.

printf '%s\n' '---' "nocite: '@*'" '---' | \
  pandoc - --bibliography="$ROOT/refs/$1" --csl="$ROOT/refs/apa.csl" --citeproc -t html | \
  sed -e '/id="refs"/d' \
      -e '/role="list"/d' \
      -e '$s|</div>$||' \
      -e 's|<div id="ref-[^"]*" class="csl-entry"[^>]*>|<p>|g' \
      -e 's|</div>|</p>|g' \
      -e 's|<em>|<i>|g' \
      -e 's|</em>|</i>|g'