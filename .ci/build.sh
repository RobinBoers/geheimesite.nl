#!/usr/bin/env fish

~/projects/personal/chop/chop.js

echo
echo "Done building"

echo
echo "=> Formatting generated HTML"

cd dist 
prettier --write ./**/*.html
prettier --write ./**/*.xml
