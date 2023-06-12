---
title: "Project: neopub"
translationKey: project-neopub
---

neopub is de blogging software die [mijn microblog/neolog](https://micro.geheimesite.nl) runt. Het is een Twitter/Mastodon-achtig platform dat volledig integreert met het IndieWeb. Er is een ingebouwd micropub endpoint en het platform ondersteund webmentions.

neopub is geinspireerd door [neofeed](https://github.com/victoriadrake/neofeed-theme), [publog](https://p83.nl) en [aaronparecki.com](https://aaronparecki.com).

Het is single-tenant en selfhosted. Dat betekent dat je het zelf op je eigen server draait voor alleen jezelf. Je kan vervolgens wel met anderen communiceren via de IndieWeb features.

## Features

Het ingebouwde micropub endpoint ondersteund deze post-types:

- notes
- replies
- bookmarks
- likes
- reposts
- photo(s)

Foto's worden geupload naar een GitHub repository, maar je kan de provider veranderen in `uploader.php` (in de `utils`) directory.

Er worden webmentions verstuurd voor alle bovenstaande post types. Verder kan je de feed filteren:

- per year
- per tag
- per post-type

## Design

neopub gebruikt een set aan JSON files voor het opslaan van posts. Ze spelen tegelijk ook de rol van JSON feed (maar ik weet niet zeker of het geldige feeds zijn). De JSON files zijn gesorteerd per jaar. Dat betekent dat er elk jaar een nieuw JSON file wordt aangemaakt met de posts van dat jaar.

De RSS feeds worden dynamisch opgebouwd met de data uit de JSON feed van het huidige jaar, en de homepage en tag pages ook. Dit is met opzet, je begint daardoor elk jaar met een 'clean slate'. Je kan natuurlijk nog wel de posts van voorgaande jaren bekijken via hun permalink of via de archive page: `example.com/posts/2022`.

## Zelf hosten

Je kan zelf neopub hosten als je microblog. Je hebt deze dingen nodig:

- PHP 7.4.3
- Apache (met support voor `.htaccess`)

Om zelf te hosten:

- Download de [source code](https://github.com/libneopub/neopub)
- Edit de config in `config.php`
- Kopieër `utils/token_example.php` naar `utils/token.php` en voeg je GitHub API token toe. Dit is alleen nodig als je foto's wil plaatsen en GitHub als host wil gebruiken.
- Installeer een theme
- Optioneel [neoblog](https://github.com/libneopub/neoblog) installeren om je microblog met een GUI te managen. **Dit is nog steeds een WIP. Gebruik op eigen risico.**

## Themes

Je kan neopub themen met CSS files (aka het `main.css` file in de `assets` directory aanpassen). Ik heb een aantal themes gemaakt: <https://libneopub.github.io/themes/>.

<span hidden>Post information</span> {{< github-icon repo="MrEmous2" >}}

{{< screenshot repo="libneopub/neopub" >}}
