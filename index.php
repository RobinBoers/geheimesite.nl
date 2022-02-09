<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Start — geheimesite.nl | Robin Boers</title>

        <link rel="stylesheet" href="/css/main.css" />
        <script defer src="/js/menu.js"></script>
    </head>
    <body>
        <a class="skip-nav" href="#content">Skip navigation</a>
        <header class="pageheader mb-4">
            <nav class="mt-4">
                <img src="/images/menu.svg" class="menu-button mb-4" />

                <ul class="menu">
                    <li class="selected">Home</li>
                    <li><a href="/over-mij.php">Over mij</a></li>
                    <li><a href="/projecten.php">Projecten</a></li>
                    <li><a href="https://github.com/RobinBoers">Github</a></li>
                </ul>
            </nav>
        </header>

        <main id="content" class="page-content mt-0 md:mt-6">
            <article class="xl:grid grid-cols-2 gap-10">
                <section>
                    <h1 class="text-4xl title font-normal">Robin Boers</h1>

                    <p>Ik ben webdesigner, PHP programmeur en tiener. Ik ben 15 jaar oud en ik woon in Maassluis. Welkom op mijn website! Dit is zeg maar een soort van mijn persoonlijke speeltuin. Ik plaats hier mijn projecten zoals games, websites en apps. <!--Je vind sinds kort hier ook mijn blog, al kan je het ook nog steeds op Blogger vinden.--></p>

                    <p>Wil je meer over mij weten? Check dan de <a href="/over-mij.php">over mij</a> pagina. Als je mijn projecten wil zien kan je op de <a href="/projecten.php">projecten</a> page kijken. Als je vooral geinterreseerd in de code bent, check dan mijn <a href="https://github.com/RobinBoers">GitHub profiel</a>.</p>
                </section>
                <img class="hidden absolute top-[80px] right-[-350px] lg:block xl:static w-full pixelart max-w-sm" src="/images/robin_pixelart.png" />
            </article>
            <article>
                <ul class="p-1 m-0 mx-auto max-w-md xl:max-w-none xl:p-0">
                    <li class="inline list-none">
                        <a class="no-underline button" href="https://www.youtube.com/channel/UCx4li1iMygs5KtqgcU5KGRw">
                            <img src="https://img.shields.io/badge/Robin%20Boers-red?style=for-the-badge&logo=youtube" />
                        </a>
                    </li>
                    <li class="inline list-none">
                        <a class="no-underline button ml-1" href="https://github.com/RobinBoers">
                            <img src="https://img.shields.io/badge/GitHub-333333?style=for-the-badge&logo=github" />
                        </a>
                    </li>
                    <!-- <li class="inline list-none">
                        <a class="no-underline button ml-1" href="https://discord.gg/DPtKK3UREu">
                            <img src="https://img.shields.io/discord/712265706132996210?color=7289DA&label=%20&logo=discord&logoColor=white&style=for-the-badge">
                        </a>
                    </li> -->
                    <li class="inline list-none">
                        <a class="no-underline button ml-1" href="https://www.linkedin.com/in/robin-boers-b18691229/">
                            <img src="https://img.shields.io/badge/linkedin-0A66C2?style=for-the-badge&logo=linkedin" />
                        </a>
                    </li>
                    <li class="inline list-none">
                        <a class="no-underline button ml-1" href="https://nindo.geheimesite.nl/user/crzywebdev">
                            <img src="https://img.shields.io/badge/crzywebdev-blueviolet?style=for-the-badge&logo=elixir" />
                        </a>
                    </li>
                    <li class="inline list-none">
                        <a class="no-underline button ml-1" href="https://webdevelopment-en-meer.blogspot.com">
                            <img src="https://img.shields.io/badge/Webdevelopment--En--Meer-orange?style=for-the-badge&logo=blogger&logoColor=white" />
                        </a>
                    </li>
                    <li class="inline list-none">
                        <a class="no-underline button ml-1" href="https://robijntje.itch.io">
                            <img src="https://img.shields.io/badge/Rob1jntje-FA5C5C?style=for-the-badge&logoColor=white&logo=itch.io" />
                        </a>
                    </li>
                    <li class="inline list-none">
                        <a class="no-underline button ml-1" href="https://reddit.com/u/Robijntje22"> <img src="https://img.shields.io/badge/-u%2FRobijntje22-%23FF4500?style=for-the-badge&logoColor=white&logo=reddit" />&nbsp; </a>
                    </li>
                </ul>
            </article>
        </main>

        <footer class="page-footer">
            &copy;
            <?php echo date("Y"); ?>
            Robin Boers. Webdesigner en PHP-developer sinds 2017.
        </footer>
    </body>
</html>
