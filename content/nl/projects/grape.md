---
title: "Project: The Grape Programming Language"
translationKey: project-grape
---

Grape is een general purpose programmmeertaal gemaakt voor rapid-pase prototyping.

Bix is een mix van de chille syntax van Python en Ruby, en het functionele aspect van Elixir en Erlang. Het doel van Bix is om een taal te bieden die een fijne syntax heeft, met de chille features van Elixir, die je kan compilen/razendsnel interpreten via Rust.

Ik werk momenteel nog actief aan dit project, vooral om te leren over hoe talen werken, en omdat ik deze taal graag zelf wil.

## Features

- Statically typed
- Functional
- Garbage-collected
- No mutable pointers
- Recursion

## Progress

Ik ben een tijdje geleden begonnen met [een prototype schrijven in Python](https://git.geheimesite.nl/grape-lang/grape.py). De Python interpreter is momenteel 90% werkend. Het enige dat nog mist is het statically-typed aspect. Verder wordt recursive functions ingeperkt door het Python recursion limit en is het echt f*cking sloom! Daarnaast heeft de REPL geen geheugen, wat niet ideaal is.

Daarom heb ik plannen de interpreter te [herschrijven in Rust](https://git.geheimesite.nl/grape-lang/grape.rs). Het doel is om hierbij typing en een import/modules systeem te introduceren.

Het uiteindelijke doel is om zowel een interpreter als compiler te hebben in Rust, en de taal dan selfhosted te maken. Maar ik ben helaas (nog!) niet slim genoeg om dat voor elkaar te krijgen.

Je kan het development volgen via de [Gitea organisation](https://git.geheimesite.nl/grape-lang) of [mijn blog](https://blog.geheimesite.nl).

<span hidden>Post information</span> {{< gitea-icon repo="grape-lang" >}}
