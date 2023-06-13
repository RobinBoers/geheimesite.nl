#!/bin/bash
# This script builds and deploys the site via FTP.

bix build
rsync -ciavuz --exclude-from=.deployignore --delete dist/ geheimesite.nl:domains/geheimesite.nl/public_html