<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Project: MrEmous2 — geheimesite.nl | Robin Boers</title>

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
                    <li><a href="/">Home</a></li>
                    <li><a href="/over-mij">Over mij</a></li>
                    <li><a href="/projecten">Projecten</a></li>
                    <li><a href="/boeken">Boeken</a></li>
                    <li><a href="https://blog.geheimesite.nl">Blog</a></li>
                </ul>
            </nav>
        </header>

        <main id="content" class="page-content">
            <article>
                <section>
                    <h1>Project: MrEmous2</h1>
                    <p>
                        Dit is een bot die ik voor de discordserver van mij en mijn vrienden heb gemaakt. Het doel was het maken van een Dankmemer clone. Het is een vrij simpele bot, maar ik heb er veel van geleerd. Bijvoorbeeld hoe je met Node.js een MySQL database kan gebruiken, hoe discordbots in het algemeen werken en hoe de reddit API werkt.
                    </p>

                    <h3>Features</h3>

                    <ul>
                        <li>Simpel economiesysteem. Je krijgt geld door berichten te verzenden.</li>
                        <li>Memes en nsfw van Reddit</li>
                        <li>Grappige commands</li>
                    </ul>

                    <p>
                        <a href="https://github.com/RobinBoers/MrEmous2">Download op GitHub</a>
                    </p>
                </section>
                <img class="w-full" src="/images/projects/mremous2.png" alt="Screenshot" />
            </article>
        </main>

        <footer class="page-footer">
            &copy; <?php echo date("Y"); ?> Robin Boers. Webdesigner en Elixir programmeur sinds 2017.
        </footer>
    </body>
</html>