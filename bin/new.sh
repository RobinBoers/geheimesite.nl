#!/bin/sh -eu

get() {
  printf "\n$1: "
  read $2

  if [ "${!2}" = "" ]; then
    echo >&2 "Error: you didn't provide $1."
    echo >&2
    exit 1 
  fi
}

get_with_default() {
  printf "\n$1 [$3]: "
  read $2

  if [ "${!2}" = "" ]; then
    eval "$2='$3'"
  fi
}

sluggify() { 
	echo "$1" | tr '[:upper:]' '[:lower:]' | tr -cs '[:alnum:]' '-' | sed 's/-$//'
}

get "Title" title
get_with_default "Language" lang "en"
get_with_default "Path" path "$(sluggify "$title")" 

export TITLE="$title"
export LANG="$lang"
export URL="$path"
export CONTENT="$2"

path="$1/$path.html"

if [ -e "$path" ]; then
  echo >&2 "Error: file '$path' already exists."
  echo >&2 
  exit 1
fi

mkdir -p "$(dirname "$path")"
cat TEMPLATE.html | envsubst > "$path" 
e "$path"

