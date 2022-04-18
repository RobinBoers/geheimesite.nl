<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Project: Nibor Virtual Assistant — geheimesite.nl | Robin Boers</title>

        <link rel="stylesheet" href="/css/main.css" />
        <script defer src="/js/menu.js"></script>
    </head>
    <body>
        <a class="skip-nav" href="#content">Skip navigation</a>
        <header class="pageheader">
            <p class="title"><a href="/">Robin Boers</a></p>

            <img src="/images/menu.svg" class="menu-button" hidden />
            <nav>
                <ul class="menu">
                    <li><a href="/index.php">Home</a></li>
                    <li><a href="/over-mij.php">Over mij</a></li>
                    <li><a href="/projecten.php">Projecten</a></li>
                    <li><a href="https://blog.geheimesite.nl">Blog</a></li>
                </ul>
            </nav>
        </header>

        <main id="content" class="page-content">
            <article>
                <section>
                    <h1>Project: Nibor</h1>

                    <p>
                        Nibor is een klein programma dat de speechrecognition API gebruikt. Je kunt hem simpele opdrachten geven, zoals:
                    </p>

                    <ul>
                        <li>Vertel een grap.</li>
                        <li>Welke dag is het?</li>
                        <li>Hoelaat is het vandaag?</li>
                        <li>Wat is het weer?</li>
                    </ul> 
                    
                    <h2>Spotify</h2>
                    <p>
                        Ik maak gebruik van de Spotify Web Playback API. Daarmee kan je je Spotify Account koppelen aan Nibor, en kan je simpele opdrachten geven zoals:
                    </p>

                    <ul>
                        <li>Skip dit nummer</li>
                        <li>Speel een muziekje af.</li>
                        <li>Ga terug naar het vorige nummer</li>
                    </ul>

                    <p>
                        Wil je Spotify koppelen? Klik dan bij het opstarten van Nibor op OK, en log in en klik op AGREE. Daarna ga je naar de app van Spotify, op PC of mobiel, en klik je op apparaten verbinden. (Net zoals het koppelen van een speaker). Daarna zie bij Nibor play buttons.
                    </p>
                        
                    <h2>Rekenen</h2>
                    <p>
                        Nibor kan redelijk rekenen. Hij kan geen wiskundige formules oplossen, maar je kan bijvoorbeeld vragen:
                    </p>
                    
                    <ul>
                        <li>Wat is 6 x 3</li>
                        <li>Wat is 420 : 5</li>
                        <li>Wat is 376 + 236.126</li>
                        <li>Wat is 73 - 56</li>
                    </ul>

                    <p>
                        Hij is te vinden bij mijn testprojecten: <a href="https://code.geheimesite.nl/speech">code.geheimesite.nl</a>
                    </p>

                </section>
                <img class="w-full" src="https://code.geheimesite.nl/images/projects/nibor.png">
            </article>
        </main>

        <footer class="page-footer">
            &copy; <?php echo date("Y"); ?> Robin Boers. Webdesigner en Elixir programmeur sinds 2017.
        </footer>
    </body>
</html>