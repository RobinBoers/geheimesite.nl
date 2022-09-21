#!/bin/bash
# This script formats everything and builds the CSS files for me using tailwind.

npx prettier --write .
cd src
npx tailwindcss -c ../tailwind.config.js -i ./assets/css/source.css -o ./assets/css/main.css