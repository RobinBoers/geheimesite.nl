#!/bin/bash
# This script builds the CSS files for me using tailwind.

cd src
npx tailwindcss -c ../tailwind.config.js -i ./src/assets/css/source.css -o ./src/assets/css/main.css