#!/usr/bin/env fish

set ignore_file .ci/.deployignore

set remote robin@dupunkto.org:pub
# set remote geheimesite.nl:domains/geheimesite.nl

set gem_dir gem
set web_dir web
# set gem_dir public_gemini
# set web_dir public_html

bix build

# Upload site files
rsync -ciavuz --delete --exclude-from=$ignore_file dist/gemini/ "$remote/$gem_dir"
rsync -ciavuz --delete --exclude-from=$ignore_file dist/web/ "$remote/$web_dir"

# Upload bilingual RSS feed
rsync -ciavuz --delete dist/rss/index.xml "$remote/$gem_dir/index.xml"
rsync -ciavuz --delete dist/rss/index.xml "$remote/$web_dir/index.xml"

# Upload single-language RSS feeds
for directory in dist/rss-*
    set language (echo $directory | cut -d'-' -f2)
   
    rsync -ciavuz dist/rss-$language/index.xml "$remote/$gem_dir/index-$language.xml"
    rsync -ciavuz dist/rss-$language/index.xml "$remote/$web_dir/index-$language.xml"
end

