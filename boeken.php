<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Boeken — geheimesite.nl | Robin Boers</title>

        <link rel="stylesheet" href="/css/main.css" />
        <script defer src="/js/bookshelves.js"></script>
        <script defer src="/js/menu.js"></script>

        <link rel="alternate" hreflang="en" href="https://geheimesite.nl/en/about.php" />

        <style>
            .project-grid li a img {
                aspect-ratio: initial !important;
            }
        </style>
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
                    <li class="selected">Boeken</li>
                    <li><a href="https://blog.geheimesite.nl">Blog</a></li>
                </ul>
            </nav>
        </header>

        <main id="content" class="page-content">
            <article>
                <section>
                    <h1>Boeken</h1>
                    <p>
                        Ik hou van lezen. Misschien klinkt het gek om een tiener dat te horen zeggen in <?php echo date("Y"); ?>, maar het is echt zo. Dit zijn de boeken die ik aan het lezen ben, het uitgelezen of graag wil lezen.
                    </p>
                </section>

                <section class="reading-heading">
                    <h2>Momenteel aan het lezen</h2>
                </section>

                <ul class="reading project-grid"></ul>

                <hr class="reading-hr my-7 border-none">

                <section>
                    <h2>Verlanglijstje</h2>
                </section>

                <ul class="wanna-read project-grid"></ul>

                <hr class="my-7 border-none">

                <section>
                    <h2>Uitgelezen</h2>

                    <p>
                        Ik ben sinds 2018 meer dan <span class="bold"><span class="book-count">vrij veel</span> boeken</span> uitgelezen. Hieronder zie je mijn favorieten.
                    </p>
                </section>

                <ul class="finished project-grid"></ul>

                <hr class="my-7 border-none">
                
            </article>
        </main>

        <footer class="page-footer">
            &copy; <?php echo date("Y"); ?> Robin Boers. Webdesigner en Elixir programmeur sinds 2017.
        </footer>
    </body>
</html>
