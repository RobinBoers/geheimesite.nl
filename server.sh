#!/bin/bash
# This scripts opens a local webserver at localhost:4000
# and starts tailwind in the background

npx tailwindcss -i ./src/assets/css/source.css -o ./src/assets/css/main.css -w &
cd src && php -S 0.0.0.0:4000 router.php