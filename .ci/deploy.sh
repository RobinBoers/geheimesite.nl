#!/usr/bin/env fish

bix build
rsync -ciavuz --delete dist/gemini/ robin@dupunkto.org:pub/gem
rsync -ciavuz --delete dist/web/ robin@dupunkto.org:pub/web
rsync -ciavuz dist/rss/ robin@dupunkto.org:pub/web
rsync -ciavuz dist/rss/ robin@dupunkto.org:pub/gem

