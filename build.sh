#!/bin/bash
# This script formats everything and builds the CSS files for me using tailwind.

echo "Cleaning cache..."

rm -rf dist

echo "Building CSS..."

npx tailwindcss -c tailwind.config.js -i src/assets/css/source.css -o src/assets/css/main.css

echo "Building site..."

HUGO_UGLYURLS=true hugo --quiet 

echo "Cleaning up build artifacts..."

rm -rf dist/nl

echo "Validating HTML..."

FILES=$(find ./dist -name "*.html" -not -path "./dist/website/v/**/*")
html5validator $FILES --ignore 'CSS' 'style'

echo "Formatting HTML..."

npx prettier --write .