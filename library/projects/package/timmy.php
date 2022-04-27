<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Project: AutoReddit Bot "Timmy" — geheimesite.nl | Robin Boers</title>

        <link rel="alternate stylesheet" href="/css/plain.css" title="plain" />       
        <script src="/js/plain-mode.js"></script>
        
        <link rel="stylesheet" href="/css/main.css" title="default" />
        <script defer src="/js/menu.js"></script>
    </head>
    <body>
        <a class="skip-nav" href="#content">Skip navigation</a>
        <header class="pageheader">
            <p class="title"><a href="/">Robin Boers</a></p>

            <img src="/images/menu.svg" alt="menu button" class="menu-button" hidden />
            <nav>
                <ul class="menu">
                    <li><a href="/index.php">Home</a></li>
                    <li><a href="/over-mij.php">Over mij</a></li>
                    <li><a href="/projecten.php">Projecten</a></li>
                    <li><a href="/boeken.php">Boeken</a></li>
                    <li><a href="https://blog.geheimesite.nl">Blog</a></li>
                </ul>
            </nav>
        </header>

        <main id="content" class="page-content">
            <article>
                <section>
                    <h1>Project: AutoReddit Bot “Timmy”</h1>
                    <p>
                        Dit is een bot die ik weer voor de discordserver van mij en mijn vrienden heb gemaakt. Deze bot kan content van een subreddit halen op een zelf gekozen interval. Hiermee kan je bijvoorbeeld automatisch memes posten in een channel.
                    </p>
                    <p>
                        De bot werkt zo: je opent het uitvoerbare bestand, en dan ga je naar <code class="bold">localhost:5665?token=123456</code> in je browser. Je krijgt dan een controlpanel waar je een server, channel, subreddit en interval moet invoeren. Als je dan op start klikt, begint de bot met posten. In de demo executable die ik heb gepubliceerd zit alleen een voorbeeld bot. Maar je kan de code downloaden en de config veranderen zodat ie met jouw server werkt. 
                    </p>
                    <p>
                        <a href="https://github.com/RobinBoers/Timmy">Download op GitHub</a>
                    </p>
                </section>
                <img class="w-full" src="/images/projects/timmy.png" alt="Screenshot" />
            </article>
        </main>
        <footer class="page-footer">
            &copy; <?php echo date("Y"); ?> Robin Boers. Webdesigner en Elixir programmeur sinds 2017.
        </footer>
    </body>
</html>