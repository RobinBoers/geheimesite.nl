#!/bin/bash
# This script builds the site using tailwind and hugo, validates it and then formats all HTML & markdown.

echo "Cleaning cache..."
rm -rf dist

echo "Building CSS..."
npx tailwindcss -c tailwind.config.js -i src/assets/css/source.css -o src/assets/css/main.css > /dev/null 2>&1

echo "Building site..."
HUGO_UGLYURLS=true hugo --quiet

echo "Copying over images..."
# In the future I want to do compressing and 
# optimizations here, but for now I'll just copy them over.
cp -r ./src/assets/images ./dist/assets/images

echo "Cleaning up build artifacts..."
rm -rf dist/nl
rm -rf dist/en/404.html
mv dist/js dist/assets/js
mv dist/css dist/assets/css
mv dist/404.html dist/404.shtml

# echo "Validating build..."
# DEPLOY=true ./validate.sh || exit 1

echo "Formatting HTML..."
npx prettier --write . --loglevel silent