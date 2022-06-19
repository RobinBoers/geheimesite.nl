<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>/now — geheimesite.nl | Robin Boers</title>

        <link rel="alternate stylesheet" href="/assets/css/plain.css" title="plain" />       
        <script src="/assets/js/plain-mode.js"></script>

        <link rel="stylesheet" href="/assets/css/main.css" title="default" />
        <script defer src="/assets/js/menu.js"></script>

        <link rel="alternate" hreflang="nl" href="https://geheimesite.nl/boeken" />

        <style>
            .project-grid li a img {
                aspect-ratio: initial !important;
            }
        </style>
    </head>
    <body>
        <a class="skip-nav" href="#content">Skip navigation</a>
        <header class="pageheader">
            <p class="title"><a href="/en/">Robin Boers</a></p>

            <img src="/assets/images/menu.svg" alt="menu button" class="menu-button" hidden />

            <nav>
                <ul class="menu">
                    <li><a href="/en/">Home</a></li>
                    <li><a href="/en/about">About me</a></li>
                    <li><a href="/en/projects">Projects</a></li>
                    <li><a href="/en/books">Books</a></li>
                    <li><a href="https://blog.geheimesite.nl/en">Blog</a></li>
                </ul>
            </nav>
        </header>

        <main id="content" class="page-content">
            <article>
                <section>
                    <h1>Now</h1>
                    <p>
                        This page is inspired by Derek Siver's <a>now page</a> movement. I think I'm a bit late to the party, but whatever. No one cares anyway. For those very confused: this page describes what I'm currently up to.
                    </p>
                </section>

                <hr class="my-7 border-none">

                <section>
                    <h2>School</h2>

                    <p>I'm currently in 3VWO. I think you British people would call it Year 10, and American folks would call it Grade 8 or something. These are some things I'm doing for school at the moment.</p>

                    <ul>
                        <li>Build <a href="https://docs.geheimesite.nl/school">a site for my school shtuff</a> (so that I can share it with my classmates)</li>
                        <li>Test week (6 tests to go)</li>
                        <li>Sports day</li>
                    </ul>
                </section>

                <hr class="my-7 border-none">

                <section>
                    <h2>IndieWeb</h2>

                    <ul>
                        <li>Build a proper (working) media endpoint for <a href="https://micro.geheimesite.nl">my microblog</a></li>
                        <li>Add delete/update support to my micropub endpoint</li>
                        <li>Figure out why posting to <a href="https://indieweb.xyz">indieweb.xyz</a> sometimes doesn't work</li>
                    </ul>
                </section>

                <hr class="reading-hr my-7 border-none">

                <section class="reading-heading">
                    <h2>Currently reading</h2>
                </section>

                <ul class="reading project-grid"></ul>

                <script>
                    function loadBooks() {
                        renderBooks("5566", ".reading");
                    }
                </script>
                <script src="/assets/js/bookshelves.js"></script>             
            </article>
        </main>

        <footer class="page-footer">
            &copy; <?php echo date("Y"); ?> Robin Boers. Webdesigner and Elixir programmer since 2017.
        </footer>
    </body>
</html>
