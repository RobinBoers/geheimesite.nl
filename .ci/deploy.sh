#!/usr/bin/env fish

bix build

# Upload site files
rsync -ciavuz --delete dist/gemini/ robin@dupunkto.org:pub/gem
rsync -ciavuz --delete dist/web/ robin@dupunkto.org:pub/web

# Upload bilingual RSS feed
rsync -ciavuz --delete dist/rss/index.xml robin@dupunkto.org:pub/web/index.xml
rsync -ciavuz --delete dist/rss/index.xml robin@dupunkto.org:pub/gem/index.xml

# Upload single-language RSS feeds
for directory in dist/rss-*
    set language (echo $directory | cut -d'-' -f2)
    
    rsync -ciavuz dist/rss-$language/index.xml robin@dupunkto.org:pub/web/index-$language.xml
    rsync -ciavuz dist/rss-$language/index.xml robin@dupunkto.org:pub/gem/index-$language.xml
end



