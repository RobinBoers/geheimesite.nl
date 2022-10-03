#!/bin/bash
# This script validates generated HTML and checks for broken links.

# Inspired/stolen from WesleyAC/notebook, MIT licensed.
# https://github.com/WesleyAC/notebook

FAIL=0
[[ -z "${DEPLOY}" ]] && DEPLOY=false || DEPLOY="${DEPLOY_ENV}"

FILES=$(find ./dist -name "*.html" -not -path "./dist/website/v/**/*")
USER_AGENT="Mozilla/5.0 (X11; Linux x86_64; rv:60.0) Gecko/20100101 Firefox/81.0"

echo "Validating HTML..."
html5validator $FILES --ignore 'CSS' 'style' || FAIL=1

# Check for broken links

if ! $DEPLOY; then
    echo "Checking for broken links..."
    for FILE in $FILES 
    do
        for URL in $(xidel --silent --extract "//a/@href" "$FILE") 
        do
            echo "$URL" | grep -E -f .validateignore > /dev/null 2>&1 && continue
            case "$URL" in
                https://*|http://*)
                    if ! curl -A $USER_AGENT --max-time 5 --fail --head "$URL" > /dev/null 2>&1; then
                        if ! curl -A $USER_AGENT --max-time 30 --fail "$URL" > /dev/null 2>&1; then

                            echo "[ERROR] Broken link detected: $FILE:$URL"
                            FAIL=2
                        fi
                    fi
                    ;;
                /*)
                    if ! { 
                        test -f "./dist${URL%#*}" || 
                        test -f "./dist${URL%#*}/index.html" || 
                        test -f "./dist${URL%#*}.html" || 
                        test -f "./dist${URL%#*}.php"; 
                    }; then
                        echo "[ERROR] Broken link detected: $FILE:$URL"
                        FAIL=2
                    fi
                    ;;
                mailto://*)
                    echo "[ERROR] mailto links should not have //: $FILE:$URL"
                    FAIL=2
                    ;;
                mailto:*)
                    ;;
                chrome://*|about:*)
                    echo "[WARNING] avoid linking to browser pages
                    ;;
                \#*)
                    ;;
                *)
                    echo "[ERROR] Unknown protocol: $FILE:$URL"
                    FAIL=2
            esac
        done
    done
fi

exit $FAIL