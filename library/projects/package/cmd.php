<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Project: CMD — geheimesite.nl | Robin Boers</title>

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
                    <li><a href="https://blog.geheimesite.nl">Blog</a></li>
                </ul>
            </nav>
        </header>

        <main id="content" class="page-content">
            <article>
                <section>
                    <h1>Project: CMD</h1>
                    <p>
                        Dit een programma dat ernorm veel lijkt op windows CMD. Ik heb het gemaakt omdat ik het leuk vond.<br>
                        Je kan er wat simpele commando's in uitvoeren, en er is een chatrobot.
                    </p>
                    <p>
                        <a href="../commandpromt/">Open CMD</a>
                    </p>
                    <p>
                        UPDATE: De nieuwe versie heeft de optie om van OS te veranderen, JS is nu ingeschakeld, en er zitten nog een paar andere leuke easter eggs in!
                    </p>
                    <p>
                        <a href="../commandpromt2/">Open CMD2</a>
                    </p>
                    <p class="text-warning">
                        Dit is een oud project wat erg buggy is, en niet meer wordt geüpdate.
                    </p>
                </section>

                <section>
                    <h2>Commando's</h2>

                    <table>
                        <tbody>
                        <tr>
                            <td>login</td>
                            <td>login to get access to root commands</td>
                        </tr>
                        <tr>
                            <td>web</td>
                            <td>type a url navigate to that website</td>
                        </tr>
                        <tr>
                            <td>web.search</td>
                            <td>search the web witth GOOGLE</td>
                        </tr>
                        <tr>
                            <td>cancel</td>
                            <td>if websearch by URL or websearch by GOOGLE is on, it turns websearch off</td>
                        </tr>
                        <tr>
                            <td>clear</td>
                            <td>clear the console, and save data</td>
                        </tr>
                        <tr>
                            <td>reset, new</td>
                            <td>clear the console, and delete data</td>
                        </tr>
                        <tr>
                            <td>logout, relog</td>
                            <td>logout</td>
                        </tr>
                        <tr>
                            <td>exit</td>
                            <td>close the terminal, and delete all data</td>
                        </tr>
                        <tr>
                            <td>debug</td>
                            <td>show debug info</td>
                        </tr>
                        <tr>
                            <td>cd</td>
                            <td>navigate to a directory</td>
                        </tr>
                        <tr>
                            <td>dir, ls</td>
                            <td>show the files in the directory</td>
                        </tr>
                        <tr>
                            <td>os.linux, os.win</td>
                            <td>change OS</td>
                        </tr>
                        <tr>
                            <td>os.motd</td>
                            <td>show the motd of the selected OS</td>
                        </tr>
                        <tr>
                            <td>js</td>
                            <td>start Javascript input</td>
                        </tr>
                        <tr>
                            <td>js.stop</td>
                            <td>stop Javascript input</td>
                        </tr>
                        <tr>
                            <td>js.delete</td>
                            <td>delete Javascript input</td>
                        </tr>
                        <tr>
                            <td>js.run</td>
                            <td>run Javascript input</td>
                        </tr>
                        </tbody>
                    </table>
                </section>
                <img class="w-full" src="/images/projects/cmd.png" alt="Screenshot" />
            </article>
        </main>

        <footer class="page-footer">
            &copy; <?php echo date("Y"); ?> Robin Boers. Webdesigner en Elixir programmeur sinds 2017.
        </footer>
    </body>
</html>
