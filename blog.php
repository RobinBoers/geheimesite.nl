<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Blog — geheimesite.nl | Robin Boers</title>

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
                
            <script src="/js/blog.js"></script>
            <script src="https://webdevelopment-en-meer.blogspot.com/feeds/posts/default?max-results=10&start-index=1&alt=json-in-script&callback=loadtoc"></script>
                
            </article>
        </main>

        <footer class="page-footer">
            &copy; <?php echo date("Y"); ?> Robin Boers. Webdesigner en PHP-developer sinds 2017.
        </footer>
    </body>
</html>
