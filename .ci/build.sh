#!/usr/bin/env fish

~/projects/personal/chop/chop.js

echo
echo "Done building"

echo
echo "=> Formatting generated HTML"

cd dist/web 
prettier --write ./**/*.html
prettier --write ./**/*.xml
