<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Project: Sticks and Rocks — geheimesite.nl | Robin Boers</title>

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
                    <li><a href="/blog.php">Blog</a></li>
                </ul>
            </nav>
        </header>

        <main id="content" class="page-content">
            <article>
                <section>
                    <h1>Project: Sticks and Rocks</h1>
                    <p>
                        Dit is een 2d exploration game met een topdown camera. Dat betekent dat je het karakter van bovenaf ziet. Ook heeft de game random gegenereerd "destructible" terrein. Das eigenlijk gewoon een coole manier om te zeggen: je kan net als in het echt de wereld om je heen helemaal vernielen :)
                    </p>
                    <p>
                        De game is gemaakt met Javascript, HTML en CSS. Dat zijn de talen waarmee ik ook websites maak. Je vraagt je misschien af: hoe kan je met webdevelopment games maken? Vrij simpel. Voor de player movement en camera gebruik ik een set css regels. Daarmee verschuif ik de map op basis van de coords van de player met css achter de player langs. Verder gebruik ik JS als basis. Daarin is de gameloop geschreven en worden input, geluid en menu's geregeld. 
                    </p>
                    <p>
                        <a href="https://webdevelopment-en-meer.blogspot.com/2021/02/mijn-eerste-goede-game.html">Lees meer...</a><br>
                        <a href="https://robijntje.itch.io/sticks-and-rocks">Speel op itch.io</a>
                    </p>
                </section>
                <img class="w-full" src="/images/projects/sar2.png">
            </article>
        </main>
        <footer class="page-footer">
            &copy; <?php echo date("Y"); ?> Robin Boers. Webdesigner en PHP-developer sinds 2017.
        </footer>
    </body>
</html>