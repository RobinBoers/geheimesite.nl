#!/usr/bin/env fish

bix build
cd dist/web
waiter --dev
