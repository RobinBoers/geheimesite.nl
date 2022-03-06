<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Project: VSKodium — geheimesite.nl | Robin Boers</title>

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
                    <li><a href="https://blog.geheimesite.nl">Blog</a></li>
                </ul>
            </nav>
        </header>

        <main id="content" class="page-content">
            <article>
                <section>
                    <h1>Project: VSKodium</h1>

                    <p>
                        VSKodium is een web-based code editor die ik heb gemaakt voor Chromebooks. Ik heb het gemaakt omdat de Python editor die we op school moesten gebruiken echt verschrikkelijk was.
                    </p>

                    <p>
                        <a href="../VSKodium/">Bekijk de live demo</a>
                    </p>

                    <p class="italic">
                        Opmerking: dit was voor mij vooral een leuk project. Het is verre van feature-complete. Als je echt een code-editor voor je Chromebook zoekt zou ik eens naar <a class="bold" href="https://vscode.dev">vscode.dev</a> kijken.
                    </p>

                    <p>
                        Dit is een code-editor gemaakt met CodeMirror, webStorage en webUSB. Het is een erg verbeterde versie van CodeEditKit. Ik ben vrij zeker dat ik dit keer CodeMirror op de juist manier heb gebruikt. Bestanden worden dit keer niet meer opgeslagen op mijn server maar in webStorage. Verder experimenteer ik met het verbinden van micro-computers zoals de arduino via webUSB. Er zijn 2 themes: <span class="bold">neo</span> en <span class="bold">ayu-dark</span>. Je keuze wordt opgeslagen in localStorage.
                    </p>

                    <h2>Features</h2>

                    <ul>
                        <li>Bestanden worden lokaal opgeslagen tot en met 10MB</li>
                        <li>Syntax highlighting</li>
                        <li>Dark mode</li>
                        <li>VIM mode</li>
                        <li>Search met Regex support</li>
                        <li>Autocomplete</li>
                    </ul>

                    <p>
                        Deze dingen zouden misschien mogelijk een soortvan klein beetje kunnen werken in theorie, maar ik weet het niet zeker:
                    </p>

                    <ul>
                        <li>WebUSB om met apparaten zoals een micro:bit of Arduino te verbinden</li>
                    </ul>
                
                </section>
                <img class="w-full" src="/images/projects/vskodium.png">
            </article>
        </main>
        <footer class="page-footer">
            &copy; <?php echo date("Y"); ?> Robin Boers. Webdesigner en PHP-developer sinds 2017.
        </footer>
    </body>
</html>