#!/usr/bin/env fish

# set base https://dupunkto.org
set base https://geheimesite.nl

# set prefix "/~robin"

cp .ci/config.template config.yaml
echo >> config.yaml
echo "  baseurl: $base" >> config.yaml
echo "  prefix: $prefix" >> config.yaml

~/projects/personal/chop/chop.js

echo
echo "Done building"

echo
echo "=> Formatting generated HTML"

cd dist 
prettier --write ./**/*.html
prettier --write ./**/*.xml
