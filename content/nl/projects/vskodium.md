---
title: "Project: VSKodium"
translationKey: project-vskodium
---

VSKodium is een web-based code editor die ik heb gemaakt voor Chromebooks. Ik heb het gemaakt omdat de Python editor die we op school moesten gebruiken echt verschrikkelijk was.

_Opmerking: dit was voor mij vooral een leuk project. Het is verre van feature-complete. Als je echt een code-editor voor je Chromebook zoekt zou ik eens naar [vscode.dev](https://vscode.dev) kijken._

Dit is een code-editor gemaakt met CodeMirror, webStorage en webUSB. Het is een erg verbeterde versie van CodeEditKit. Ik ben vrij zeker dat ik dit keer CodeMirror op de juist manier heb gebruikt. Bestanden worden dit keer niet meer opgeslagen op mijn server maar in webStorage. Verder experimenteer ik met het verbinden van micro-computers zoals de arduino via webUSB. Er zijn 2 themes: <span class="bold">neo</span> en <span class="bold">ayu-dark</span>. Je keuze wordt opgeslagen in localStorage.

## Features

-   Bestanden worden lokaal opgeslagen tot en met 10MB
-   Syntax highlighting
-   Dark mode
-   VIM mode
-   Search met Regex support
-   Autocomplete

Deze dingen zouden misschien mogelijk een soortvan klein beetje kunnen werken in theorie, maar ik weet het niet zeker:

-   WebUSB om met apparaten zoals een micro:bit of Arduino te verbinden

## Filesystem URL scheme

Je kan de bestanden ook benaderen via het `filesystem:` URL scheme:

```text
filesystem:https://geheimesite.nl/persistent/[FILE.EXT]
```

<span hidden>Post information</span> {{< demo-icon url="/projects/VSKodium/" >}} {{< gitea-icon repo="RobinBoers/VSKodium" >}}

{{< screenshot repo="RobinBoers/VSKodium" >}}
