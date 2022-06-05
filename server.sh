#!/bin/bash
# This scripts opens a local webserver at localhost:4000
# and starts tailwind in the background

cd src

php -S 0.0.0.0:4000 router.php &
npx tailwindcss -c ../tailwind.config.js -i ./assets/css/source.css -o ./assets/css/main.css -w