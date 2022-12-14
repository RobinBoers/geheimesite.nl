#!/bin/bash
# This scripts opens a local webserver at localhost:4000
# and starts tailwind in the background

npx tailwindcss -c tailwind.config.js -i src/assets/css/source.css -o src/assets/css/main.css -w &
hugo server -p 4000
