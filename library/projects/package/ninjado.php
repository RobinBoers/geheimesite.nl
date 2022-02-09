<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Project: NinjaDO — geheimesite.nl | Robin Boers</title>

        <link rel="stylesheet" href="/css/main.css" />
        <script defer src="/js/menu.js"></script>
    </head>
    <body>
        <a class="skip-nav" href="#content">Skip navigation</a>
        <header class="pageheader">
            <p class="title"><a href="/">Robin Boers</a></p>

            <img src="/images/menu.svg" class="menu-button" />
            <nav>
                <ul class="menu">
                    <li><a href="/index.php">Home</a></li>
                    <li><a href="/over-mij.php">Over mij</a></li>
                    <li><a href="/projecten.php">Projecten</a></li>
                    <li><a href="https://github.com/RobinBoers">Github</a></li>
                </ul>
            </nav>
        </header>

        <main id="content" class="page-content">
            <article>
                <section>
                    <h1>Project: NinjaDO</h1>
                    <p>
                        NinjaDO is de basis voor een multiplayer spel gebouwd met socket.io en Javscript. Ik ben er erg trots op. Je kan vanuit de interface een serveradres intypen en een game aanmaken, die andere dan kunnen joinen. Je kan het project <a href="https://github.com/RobinBoers/NinjaDO">op Github</a> vinden.
                    </p>

                    <h2>Installatie</h3>
                    <p>
                        De game heeft een server en een client. De server app download je en run je op je PC. Het zou je je IP moeten vertellen (maar soms werkt het niet). De client app kan je gewoon als HTML bestand op je computer openen in een webbrowser. Connect met de server en klaar is kees!
                    </p>

                    <h2>Singleplayer versie</h2>
                    <p>
                        De game heeft een singleplayer versie (met andere sprites) die nog simpler is. Die vind je in de  <a href="https://github.com/RobinBoers/NinjaDO/tree/singleplayer">singleplayer branch</a>. Als je wil kan je de <a href="https://code.geheimesite.nl/beta/NinjaDO/singleplayer">live demo</a> spelen. Er is alleen naast rondlopen niks te doen.</p>

                </section>
                <img class="w-full" src="/images/projects/ninjado2.png">
            </article>
        </main>

        <footer class="page-footer">
            &copy; <?php echo date("Y"); ?> Robin Boers. Webdesigner en PHP-developer sinds 2017.
        </footer>
    </body>
</html>