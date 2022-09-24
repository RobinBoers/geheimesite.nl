#!/bin/bash
# This script formats everything and builds the CSS files for me using tailwind.

rm -rf dist

npx tailwindcss -c tailwind.config.js -i src/assets/css/source.css -o src/assets/css/main.css
HUGO_UGLYURLS=true hugo --quiet 

# Remove build artifacts & format HTML
rm -rf dist/nl
npx prettier --write .
