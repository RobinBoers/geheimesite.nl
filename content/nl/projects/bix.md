---
title: "Project: bix"
translationKey: project-bix
---

Bix is een project manager geschreven in Fish.

## WTF?

Bix is een simpele tool dat package manager wrapt. Waarom? Nou, ik werk met best veel codebases, die allemaal een ander command gebruiken om de webserver te starten, en ik was het zat om perongeluk `mix phx.server` in een node project, `cargo run` in een elixir project etc. te runnen.

Daarnaast gebruik ik bix ook om tijd te besparen bij dingen die ik vaak doe. Dit is bijvoorbeeld wat ik normaal run voor het starten van een nieuw project:

```shell
mkdir lok && cd lok
git init
# Edits files etc.

git add .
git commit -m "Initial commit"
# Opens Gitea to create repo

git remote add origin git.geheimesite.nl:RobinBoers/lok
git branch -M master
git push -u origin master
```

Met bix wordt dat ingekort naar:

```shell
bix new lok
# Edit files

git add .
git commit -m "Initial commit"
bix create-repo lok "Dynamically typed programming language written in Rust"
bix link-repo RobinBoers/lok
```

## Installatie

```shell
curl -sSfL https://git.geheimesite.nl/libre0b11/bix/raw/branch/master/install.sh | fish
```

## Usage

Bix gebruikt user-defined scripts in de `.ci` directory (ookwel handlers genoemd) om de commands te implementeren. `bix build` runt bijvoorbeeld `.ci/build.sh`.

Als er geen handlers aanwezig zijn probeert bix te raden wat voor soort project je gebruikt, en runt op basis daarvan het juiste command.

Daarnaast bevat bix ook wrappers voor bepaalde veelgebruikte git commands:

- `bix new <name>` initialiseert een nieuwe repo.
- `bix link-repo <org/repo>` linkt een nieuwe remote aan de huidige repo.
- `bix push` runt `git push` en runt daarna de deploy handler[^1] in async.
- `bix merge <from> <into>` merged de huidige (of `from`) branch in de `into` (meestal master) branch.

En om werken met git nóg makkelijker te maken, heeft bix ook een Gitea integratie:

- `bix auth gitea` om in te loggen met je Gitea account (de API access token wordt in de keyring opgeslagen).
- `bix create-repo repo --org=org` maakt een nieuwe repo in je Gitea account (use --org parameter om een organisation account te gebruiken).

En, als je alleen `bix` runt, wordt het "entrypoint" gerunt (momenteel gehardcode naar `.ci/server.sh`). Het zou je app moeten starten.

Als er geen entrypoint is wordt deze net als bij de andere handlers geraden door bix.

## Configuration

Je kan bix instellen met environment variables:

```shell
set BIX_DEFAULT_BRANCH          "master"
set BIX_GIT_HOST                "git@gitea.your.host"
# Gitea/Forgejo specific, used for creating repos with the API
set BIX_GITEA_API_BASE          "https://gitea.your.host/api/v1"
```

[^1]: Ik run mijn CI/CD lokaal omdat ik het zat was GitHub actions in te stellen als alles lokaal al werkt.

<span hidden>Post information</span> {{< github-icon repo="libre0b11/bix" >}}
