<!DOCTYPE html>
<html>
    <head>
        <title>
            Start - geheimesite.nl | Robin Boers
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        session_start();

        if(!isset($_SESSION['login19'])) {
            $_SESSION['login19'] = false;
        }

        ?>
    </head>
    <body class="hp">
        <div id="SmallNav" class="small-nav">
            <a href="javascript:void(0)" class="close nodec" onclick="closeNav()">&times;</a>
            <a href="index.php" class="w3-button">Home</a>
            <a href="over-mij.php" class="w3-button">Over mij</a>
            <a href="https://github.com/RobinBoers" class="w3-button">GitHub</a>
            <a href="projecten.php" class="w3-button">Projecten</a>
            <a href="https://code.geheimesite.nl" class="w3-button">Beta projecten</a>
        </div>
        <div class="frame" id="frame">
              <header>
                  <div class="hp-menu">
                        <a href="index.php" class="hp-menu-item w3-button">Home</a>
                        <a href="over-mij.php" class="hp-menu-item w3-button">Over mij</a>
                        <a href="https://github.com/RobinBoers" class="hp-menu-item w3-button">GitHub</a>
                        <a href="projecten.php" class="hp-menu-item w3-button">Projecten</a>
                        <a href="https://code.geheimesite.nl" class="hp-menu-item w3-button">Beta projecten</a>
                        <span class="smallNavButton w3-right w3-bar-item w3-button" onclick="openNav()"><i class="fas fa-bars"></i></span>
                    </div>
              </header>
              <main>  
                    <section class="intro">

                        <!-- Typewriter effect -->
                        <div><div class="console-container"><h1 class="console"></h1></div>

                        <!-- Fallback voor oudere browsers -->
                        <noscript>
                            <style>
                                .console-container {
                                    display: none;
                                }
                            </style>
                            <h1>Hey,<br>Ik ben Robin</h1>
                        </noscript>

                        <p>Ik ben webdesigner, PHP programmeur en tiener. Ik ben 14 jaar oud en ik woon in Maassluis. Welkom op mijn website! Dit is zegmaar een soortvan mijn persoonlijke speeltuin. Ik plaats hier mijn projecten zoals games, websites en apps. Je vind sinds kort hier ook mijn blog, al kan je het ook nog steeds op blogger vinden.</p> <p>Wil je meer over mij weten? Check dan de <a href="over-mij.php">over mij</a> page. Als je mijn projecten wil zien kan je op de <a href="projecten.php">projecten</a> page kijken. Als je vooral geinterreseerd in de code bent, check dan <a href="https://github.com/RobinBoers">mijn GitHub profiel</a>.</p><p> Als je op zoek bent naar Nindo moet ik je teleurstellen, want dat heb ik begin 2021 offline gehaald. Lees daar <a href="https://webdevelopment-en-meer.blogspot.com/2021/01/nindo-is-offline.html">hier</a> meer over.</p></div>

                        <img class="pixelart pixelprofile" src="/images/p-pixelart.png">
                    </section>  
                    <hr>
                    <section class="social">
                        <a href="https://www.youtube.com/channel/UCx4li1iMygs5KtqgcU5KGRw">
                            <img src="https://img.shields.io/badge/Robin%20Boers-red?style=for-the-badge&logo=youtube">
                        </a> 
                        <a href="https://discord.gg/DPtKK3UREu">
                            <img src="https://img.shields.io/discord/712265706132996210?color=7289DA&label=%20&logo=discord&logoColor=white&style=for-the-badge">
                        </a>
                        <a href="https://github.com/RobinBoers">
                            <img src="https://img.shields.io/badge/RobinBoers-blueviolet?style=for-the-badge&logo=github">
                        </a>
                        <a href="https://webdevelopment-en-meer.blogspot.com">
                            <img src="https://img.shields.io/badge/Webdevelopment--En--Meer-orange?style=for-the-badge&logo=blogger&logoColor=white">
                        </a>
                        <a href="https://robijntje.itch.io">
                            <img src="https://img.shields.io/badge/Rob1jntje-FA5C5C?style=for-the-badge&logoColor=white&logo=itch.io">
                        </a>
                        <a href="https://reddit.com/u/Robijntje22">
                            <img src="https://img.shields.io/badge/-u%2FRobijntje22-%23FF4500?style=for-the-badge&logoColor=white&logo=reddit">
                        </a>
                        <a href="https://gitstalk.netlify.app/RobinBoers">
                            <img src="https://img.shields.io/badge/Stalk%20me!-333333?style=for-the-badge&logoColor=white&logo=github">
                        </a>
                    </section>
                    <section class="blog">
                        <?php
                            $howMuch = 5;
                            $onHP = true;
                            include "php/blog.php";
                        ?>
                    </section>
              </main>
        </div>
        <script src="scripts/menu.js"></script>
        <script src="scripts/typewriter.js"></script>
    </body>
</html>
