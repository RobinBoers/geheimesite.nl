#!/bin/bash
# This script builds the site using tailwind and hugo, validates it and then formats all HTML & markdown.

echo "Cleaning cache..."
rm -rf dist

echo "Building CSS..."
npx tailwindcss -c tailwind.config.js -i src/assets/css/source.css -o src/assets/css/main.css > /dev/null 2>&1

echo "Building site..."
HUGO_UGLYURLS=true hugo --quiet 

echo "Cleaning up build artifacts..."
rm -rf dist/nl

echo "Validating build..."
DEPLOY=true ./validate.sh || exit 1

echo "Formatting HTML..."
npx prettier --write . --loglevel silent