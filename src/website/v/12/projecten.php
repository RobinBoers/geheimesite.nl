<!DOCTYPE html>
<html>
    <head>
        <title>
            Projecten - geheimesite.nl | Robin Boers
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="css/main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            include "php/header_nl.php";
        ?>
        <main>
            <div class="w3-container">
                <h2>Projecten</h2>
            </div>
            <section>
                <div class="w3-row-padding">
                    <div class="w3-col l3 m6 w3-margin-bottom">
                      <div class="w3-display-container">
                        <a href="/projects/wb.php"><div class="w3-display-topleft w3-black w3-padding">Website bouwer</div>
                        <img src="/images/projects/wb.png" alt="House" style="width:100%"></a>
                      </div>
                    </div>
                    <div class="w3-col l3 m6 w3-margin-bottom">
                      <div class="w3-display-container">
                        <a href="/projects/websites/groendoenerij.php"><div class="w3-display-topleft w3-black w3-padding">Groendoenerij</div>
                        <img src="/images/projects/groendoenerij.png" alt="House" style="width:100%"></a>
                      </div>
                    </div>
                    <div class="w3-col l3 m6 w3-margin-bottom">
                      <div class="w3-display-container">
                        <a href="/projects/websites/sterrenkruid.php"><div class="w3-display-topleft w3-black w3-padding">Sterrenkruid</div>
                        <img src="/images/projects/sterrenkruid.png" alt="House" style="width:100%"></a>
                      </div>
                    </div>
                    <div class="w3-col l3 m6 w3-margin-bottom">
                      <div class="w3-display-container">
                        <a href="/projects/secretsitecode.php"><div class="w3-display-topleft w3-black w3-padding">SecretSiteCode</div>
                        <img src="/images/projects/secret_site_code.png" alt="House" style="width:100%"></a>
                      </div>
                    </div>
                </div>
                <div class="w3-row-padding">
                    <div class="w3-col l3 m6 w3-margin-bottom">
                      <div class="w3-display-container">
                        <a href="/library/website/nindo"><div class="w3-display-topleft w3-black w3-padding">Nindo</div>
                        <img src="/images/projects/nindo.png" alt="House" style="width:100%"></a>
                      </div>
                    </div>
                    <div class="w3-col l3 m6 w3-margin-bottom">
                      <div class="w3-display-container">
                        <a href="/projects/cmd.php"><div class="w3-display-topleft w3-black w3-padding">CMD</div>
                        <img src="/images/projects/cmd.png" alt="House" style="width:100%"></a>
                      </div>
                    </div>
                    <div class="w3-col l3 m6 w3-margin-bottom">
                      <div class="w3-display-container">
                        <a href="/projects/os.php"><div class="w3-display-topleft w3-black w3-padding">OS</div>
                        <img src="/images/projects/os.png" alt="House" style="width:100%"></a>
                      </div>
                    </div>
                    <div class="w3-col l3 m6 w3-margin-bottom">
                      <div class="w3-display-container">
                        <a href="/projects/platformgame.php"><div class="w3-display-topleft w3-black w3-padding">Platform Game</div>
                        <img src="/images/projects/platformgame.png" alt="House" style="width:100%"></a>
                      </div>
                    </div>
                </div>
                <div class="w3-row-padding">
                    <div class="w3-col l3 m6 w3-margin-bottom">
                      <div class="w3-display-container">
                        <a href="/projects/websites/hetgg.php"><div class="w3-display-topleft w3-black w3-padding">Het GG</div>
                        <img src="/images/projects/hetgg.png" alt="House" style="width:100%"></a>
                      </div>
                    </div>
                    <div class="w3-col l3 m6 w3-margin-bottom">
                      <div class="w3-display-container">
                        <a href="/projects/code_edit_kit.php"><div class="w3-display-topleft w3-black w3-padding">Code Edit Kit</div>
                        <img src="/images/projects/code-editor.png" alt="House" style="width:100%"></a>
                      </div>
                    </div>
                    <div class="w3-col l3 m6 w3-margin-bottom">
                      <div class="w3-display-container">
                        <a href="/projects/file_eXplorer.php"><div class="w3-display-topleft w3-black w3-padding">File eXplorer</div>
                        <img src="/images/projects/File_eXplorer.png" alt="House" style="width:100%"></a>
                      </div>
                    </div>
                    <div class="w3-col l3 m6 w3-margin-bottom">
                      <div class="w3-display-container">
                        <a href="/projects/dagboekapp.php"><div class="w3-display-topleft w3-black w3-padding">Dagboek App</div>
                        <img src="/images/projects/dagboek1.png" alt="House" style="width:100%"></a>
                      </div>
                    </div>
                </div>
            </section>
            <section class="w3-container">
                <!-- Blog -->
                <?php
                    include "php/blog.php";
                ?>
            </section>
        </main>
        <footer class="pagefooter w3-center">
            <p>Gemaakt door Robin Boers. Beginnend Webdesigner en programmeur sinds 2017. Gemaakt met HTML5 en CSS3</p>
        </footer>
    </body>
</html>