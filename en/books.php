<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Books — geheimesite.nl | Robin Boers</title>

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

            <img src="/images/menu.svg" class="menu-button" />

            <nav>
                <ul class="menu">
                    <li><a href="/en/index.php">Home</a></li>
                    <li><a href="/en/about.php">Over mij</a></li>
                    <li><a href="/en/projects.php">Projects</a></li>
                    <li class="selected">Books</li>
                    <li><a href="https://blog.geheimesite.nl/en">Blog</a></li>
                </ul>
            </nav>
        </header>

        <main id="content" class="page-content">
            <article>
                <section>
                    <h1>Books</h1>
                    <p>
                        I like reading. It might sound weird, a teenager saying that in <?php echo date("Y"); ?>, but it's actually true. These are the books that I'm currently reading, I finished or would like to read.
                    </p>
                </section>

                <section class="reading-heading">
                    <h2>Currently reading</h2>
                </section>

                <ul class="reading project-grid"></ul>

                <hr class="reading-hr my-7 border-none">

                <section>
                    <h2>Wanna read</h2>
                </section>

                <ul class="wanna-read project-grid"></ul>

                <hr class="my-7 border-none">

                <section>
                    <h2>Finished</h2>

                    <p>
                        Since 2018, I finished more than <span class="bold"><span class="book-count">vrij veel</span> books</span>. Here you can see my favorites.
                    </p>
                </section>

                <ul class="finished project-grid"></ul>

                <hr class="my-7 border-none">
                
            </article>
        </main>

        <footer class="page-footer">
            &copy; <?php echo date("Y"); ?> Robin Boers. Webdesigner and Elixir programmeur since 2017.
        </footer>
    </body>
</html>
