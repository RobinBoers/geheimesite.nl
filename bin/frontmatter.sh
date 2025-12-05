#!/usr/bin/env bash
# Parse frontmatter data from Markdown.

case ${1:-} in
  -h|--help)
    echo "Usage: $(basename $0) <FILE> <FIELD>[=DEFAULT] ..."
    echo
    exit
    ;;
esac

file="$1"; shift

awk -v fields="$*" '
BEGIN {
  n = split(fields, args)
  for (i = 1; i <= n; i++) {
    split(args[i], kv, "=")
    field = kv[1]
    default = (length(kv) > 1) ? kv[2] : ""
    defaults[field] = default
    order[i] = field
  }
}
/^---$/ { if (++dash == 2) exit; next }
dash == 1 && /^[a-z]+:/ {
  colon = index($0, ":")
  key = substr($0, 1, colon - 1)
  val = substr($0, colon + 1)
  sub(/^ */, "", val)
  values[key] = val
}
END {
  for (i = 1; i <= n; i++) {
    f = order[i]
    printf "%s%s", (f in values ? values[f] : defaults[f]), (i < n ? "\t" : "")
  }
  print ""
}
' "$file"
