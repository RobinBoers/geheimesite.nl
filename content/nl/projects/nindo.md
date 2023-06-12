---
title: "Project: Nindo"
translationKey: project-nindo
---

Nindo is een klein social media platform dat ik in 2018-2019 heb gemaakt.  
Het is een van de grootste codebases waar ik ooit mee heb gewerkt en het was een hele goed leerproject. Er was een website en een webapp.

Het ondersteund posts, likes, vrienden, afbeeldingen, private messages en chatrooms. Ik heb het 1 januari 2021 offline gehaald vanwege inactiviteit. Daarnaast was de codebase zo groot dat het een nachtmerrie was om te onderhouden. Als ik één bestand aanpaste brak het complete platform.

Je kan het project nog wel op GitHub vinden onder de GPL3 licentie. En als je wilt, en de kennis hebt, mag je het ook zelf hosten. [Bekijk op GitHub](https://github.com/RobinBoers/nindo).

## Archief

Ik heb de content van Nindo gearchiveerd. Er stond niet veel op, maar het is een stukje geschiedenis van mijn website, en ik heb daarom besloten de content die al gepost was te behouden. Je kan het hier vinden: [Nindo Archief](/website/nindo/).

## Geschiedenis

Ik ben Nindo ooit begonnen als een chatapp voor geheim agenten. Mijn hele website ging over een geheime ruimte organisatie genaamd de DDDD (De Dienst van Buitenaardse Dimenties en Domeinen) die ik en mijn vrienden hadden bedacht. Je kan die versies van mijn website vinden in mijn [Website Library](/website/overview.php).

Een onderdeel van die chatapp maakte gebruik van een JSON bestand om publieke berichten te plaatsen, als een soort Twitter clone. Dit onderdeel noemde in Nindo, omdat het cool klonk en Ninjas <strong class="bold">vast</strong> wel iets te maken hadden met geheim agenten.

{{< figure src="assets/images/projects/dgaw.png" alt="Een simpel login scherm met 1 kolom" caption="De eerste versie van de DGAW" >}}

Een tijdje later besloot ik de webapp (genaamd DGAW, De Geheim Agenten Webapp) een nieuw jasje te geven. Ik voegde support toe voor een rare manier van DMs die enigzins op mailen leek.

{{< figure src="assets/images/projects/dgaw.png" alt="Vernieuwd ontwerp met meerdere kolommen en meer functionaliteit" caption="Redesign met meer functies" >}}

Bij het derde en laaste redesign gebruikte ik [de social media template van W3Schools](https://www.w3schools.com/w3css/tryw3css_templates_social.htm). Ik heb toen mijn hele website herontworpen, en ik heb die basis nog voor anderhalf jaar gebruikt, voor ik in juni 2022 de infrastructuur van de site op de schop gooide. Ik heb destijds bij het herontwerpen van de site de naam DGAW laten vallen, gezien het feit dat het nog maar vrij weinig met geheim agenten te maken, en zeg het zelf, DGAW klinkt wat suf toch?

{{< update title="DGAW WEER ONLINE" date="October 21, 2019" >}}
De DGAW is weer online! Het heeft nu een andere naam: Nindo. Je kunt er nog steeds openbare berichten plaatsen, en prive berichten versturen. Maar je kunt nu ook afbeeldingen aan je berichten toevoegen met Nindo Images, en je kunt berichten liken. Je kunt nog steeds inloggen met een geheimesite account. Wil je het zien? Kijk dan eens hier:

[Inloggen](/website/nindo) | [Nindo](/website/nindo)
{{< / update >}}

Ik heb daarna nog veel dingen toegevoegd: likes, images in posts, profielfotos, chat (logische versie van DMs) en friends. Ik heb ook twee versies van de webapp gehad, waarbij ik gebruik maakte van de PWAs.

{{< update title="GROTE NINDO UPDATE" date="December 27, 2019" >}}
Grote update! Ik heb de laatste tijd hard gewerkt aan Nindo, en ik ben trots om aan te kondigen dat er vanaf nu een 2 nieuwe functies in Nindo zitten.

1.  Je kunt je eigen profielfoto instellen.
2.  Er is weer een Nindo webapp!

Je vind ze allebei in je Nindo/geheimesite-account dashboard.  
[Naar je dashboard](/website/nindo)
{{< / update >}}

{{< figure src="assets/images/projects/nindo.png" alt="'Modern' herontwerp op basis van de W3Schools social media template" caption="Redesign met meer functies" >}}

Kort daarna besloot ik Nindo offline te halen en te open-sourcen. Dit besluit was mede zodat ik me meer kon focussen op het ontwikkelen van andere projecten, en omdat ik graag de source code wilde publiceren, maar ik bang was dat er kritieke bugs zouden worden ontdekt die mijn server (en daarmee hele site) kwetsbaar zouden maken.

{{< update title="NINDO 0FFLINE" date="January 1, 2021" >}}
Nindo is vanaf 1 januari 2021 offline. Er kunnen geen berichten meer worden geplaatst, profielen worden gemaakt of berichten worden verstuurd. Accounts blijven online, maar worden allemaal overgezet naar geheimesite-accounts. Dit betekent dat je gewoon kan inloggen, en dat je gebruik kan maken van andere apps die ik gemaakt heb.

Ik heb er erg van genoten Nindo te maken, en te onderhouden.  
Als je intresse hebt in het project, kan je het op GitHub zien.  
[https://github.com/RobinBoers/Nindo](https://github.com/RobinBoers/Nindo)
{{< / update >}}

Je kan op mijn blog meer lezen over het besluit om Nindo offline te halen: [Nindo is offline - Webdevelopment-En-Meer](https://blog.geheimesite.nl/2021/01/nindo-is-offline.html)

Ik heb in 2022 de inlogfunctie uitgeschakeld. Naast Nindo was er weinig met je account te doen, en al mijn andere projecten zijn gewoon zonder account te gebruiken.

## Een nieuwe start

In 2021 heb ik een nieuw platform gebouwd dat ik ook Nindo (ik was schijnbaar nogal gehecht aan de naam) noemde. Ook dit was een leerproject. Het doel was een social media platform te bouwen dat als kern RSS had. Het functioneerde zowel als een RSS reader als als een platform om content op te publiceren. Het mooie was dat je dus ook users van andere Nindo instances kon volgen, omdat alles via RSS werkte.

Helaas leed dit project aan hetzelfde probleem als het originele Nindo. Het was vooral bedoeld als project om Phoenix en Phoenix LiveView te leren. Het was niet gebouwd met de uiteindelijke functionaliteit in gedachten. Het werkte prima, maar alleen op een kleine schaal. En aangezien ik toch de enige gebruiker was heb ik de stekker eruit getrokken toen het tijd werd om de servers te verplaatsen naar een andere Fly.io instance. De homepage, het blog en de documentatie staan nog online op [nindo.geheimesite.nl](https://nindo.geheimesite.nl).

Het moraal van dit verhaal? Als je dingen wil leren, bouw ze gewoon. Het maakt niet uit of het uiteindelijk schaalt of te onderhouden is, zolang je er maar lol mee hebt en er iets van leert. Misschien zal ik ooit wel een nieuwe versie van Nindo bouwen, al betwijfel ik of ik het Nindo zou noemen. Maar van de eerste twee iteraties heb ik in ieder geval veel geleerd.

{{< screenshot repo="RobinBoers/nindo-phx" >}}
