#!/bin/bash
# Script to build and test the site using live PHP webserver.

DEV=true ./bin/build.sh

echo "Copying over router.php for testing..."
cp ./src/router.php ./dist/router.php

echo "Starting live server..."
echo "Listening on http://localhost:4000/"
cd ./dist && waiter