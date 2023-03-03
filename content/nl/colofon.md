---
title: "Colofon"
translationKey: colophon
---

Deze site en mijn blog zijn gebouwed met behulp van [Hugo](https://gohugo.io), een static site generator. Ze zijn gebouwd om zo lightweight mogelijk te zijn en gebruik te maken van semantische HTML.

Deze site wordt gebuilt door [GitHub actions](https://github.com/RobinBoers/geheimesite.nl/actions) en gedeployed met [FTP-Deploy-Action](https://github.com/SamKirkland/FTP-Deploy-Action). Mijn site wordt gehost bij [bHosted](https://www.bhosted.nl/?ref=97f4c4a4b13e269e12cfd4f0352ba527) en mijn blog staat op [GitHub Pages](https://pages.github.com).

Volledig [geldige HTML](https://validator.w3.org/nu/?doc=https://geheimesite.nl) en [geldige CSS](https://jigsaw.w3.org/css-validator/validator?uri=https://geheimesite.nl/assets/css/main.css), die gegenereerd wordt door [tailwindcss](https://tailwindcss.com). Alle content is geschreven in Markdown in [neovim](https://neovim.io).

Ik heb een [.htaccess](https://github.com/RobinBoers/geheimesite.nl/blob/master/src/.htaccess) file dat alle fancy URLs en caching doet. HTML files worden voor een dag gecached, images en fonts worden voor altijd gecached.

Mijn [OPML](/subscriptions) file voor RSS subscriptions en [sitemap](/en/sitemap.xml) worden gerendered met behulp van [XSL stylesheets](https://github.com/RobinBoers/geheimesite.nl/tree/master/src/static/assets/xsl).

[Merriweather](https://fonts.google.com/specimen/Merriweather) is het font voor de primaire content, [Fira Sans Condensed (Light 300 Italic)](https://fonts.google.com/specimen/Fira+Sans+Condensed) voor de headings en [Bungee Shade](https://fonts.google.com/specimen/Bungee+Shade) voor de header. Code blocks gebruiken het default monospace font. Alle fonts zijn zelf gehost [om te voorkomen dat Google mijn bezoekers trackt](https://www.brycewray.com/posts/2020/08/google-fonts-privacy/).

Ik heb mijn eigen barebones statistieken tracker geschreven. Hij trackt visits, geen view, per post op mijn blog. Hij heeft ook een optionele disable trigger met `localStorage`, zodat mijn eigen view niet meegerekend worden. De resultaten zijn [publiekelijk beschikbaar](/blog/stats) en kunnen per maand gefilterd worden. Ze worden weergegeven in een simpele graph die ik met Chart.js gebouwd heb.

Ik sla geen enkele informatie van mijn bezoekers op. [Privacy statement](/privacy).

<span hidden>Relevante links</span> {{< link-icon url="https://blog.geheimesite.nl/en/post/history-of-my-site/" label="Blogpost (engelstalig)" >}}
