#!/bin/bash
# This scripts opens a local webserver at localhost:4000
# and starts tailwind in the background

hugo server -p 4000 &
npx tailwindcss -c tailwind.config.js -i static/assets/css/source.css -o static/assets/css/main.css -w