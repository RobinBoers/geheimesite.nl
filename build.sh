#!/bin/bash
# This script builds the CSS files for me using tailwind.

cd src
npx tailwindcss -c ../tailwind.config.js -i ./assets/css/source.css -o ./assets/css/main.css