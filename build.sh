#!/bin/bash
# This script builds the site using tailwind and hugo, validates it and then formats all HTML & markdown.

[[ -z "${DEV}" ]] && DEV=false || DEV="${DEV_ENV}"
[[ -z "${VALIDATE}" ]] && VALIDATE=false || VALIDATE="${VALIDATE_ENV}"

echo "Cleaning cache..."
rm -rf dist

echo "Building CSS..."
npx tailwindcss -c tailwind.config.js -i src/assets/css/source.css -o src/assets/css/main.css > /dev/null 2>&1

if ! $VALIDATE; then
    echo "Building site..."
    HUGO_UGLYURLS=true hugo --quiet || exit 1
else
    echo "Building site in validate mode..."
    HUGO_UGLYURLS=true HUGO_MINIFY_TDEWOLFF_HTML_KEEPCOMMENTS=true HUGO_ENABLEMISSINGTRANSLATIONPLACEHOLDERS=true hugo --quiet || exit 1
fi

echo "Manually fixing some filenames..."
mv dist/404.html dist/404.shtml
cp dist/assets/css/main.min.*.css dist/assets/css/main.css

if ! $DEV; then

    echo "Cleaning up build artifacts..."
    rm -rf dist/nl
    rm -rf dist/en/404.html
    rm -rf dist/README.md

    # echo "Validating build..."
    # DEPLOY=true ./validate.sh || exit 1

    echo "Formatting HTML..."
    npx prettier --write . --loglevel silent

fi