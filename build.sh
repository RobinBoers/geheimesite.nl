#!/bin/bash
# This script formats everything and builds the CSS files for me using tailwind.

npx tailwindcss -c tailwind.config.js -i static/assets/css/source.css -o static/assets/css/main.css
HUGO_UGLYURLS=true hugo --quiet 

# Remove weirdness from hugo
rm -rf public/nl
npx prettier --write .
