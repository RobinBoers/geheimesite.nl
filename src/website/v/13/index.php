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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div id="SmallNav" class="small-nav">
            <a href="javascript:void(0)" class="close nodec" onclick="closeNav()">&times;</a>
            <a href="index.php" class="w3-button">Home</a>
            <a href="over-mij.php" class="w3-button">Over mij</a>
            <a href="https://github.com/RobinBoers" class="w3-button">GitHub</a>
            <a href="projecten.php" class="w3-button">Projecten</a>
            <a href="https://code.geheimesite.nl" class="w3-button">Beta projecten</a>
            <a href="/account" class="w3-button">Inloggen</a>
        </div>
        <div class="frame" id="frame">
              <header class="homepagetitle">
                  <center><h1><a class="w3-bar-item nodec"><b>GEHEIMESITE.NL</b></a></h1></center>
                  <center class="hp-menu">
                      <a href="index.php" class="w3-button">Home</a>
                      <a href="over-mij.php" class="w3-button">Over mij</a>
                      <a href="https://github.com/RobinBoers" class="w3-button">GitHub</a>
                      <a href="projecten.php" class="w3-button">Projecten</a>
                      <a href="https://code.geheimesite.nl" class="w3-button">Beta projecten</a>
                      <a href="/account" class="w3-button">Inloggen</a>
                  </center>
                  <center>
                      <span class="hp-small" onclick="openNav()"><i class="fas fa-bars"></i></span>
                  </center>
              </header>
              <main>
                <section class="uitgelicht w3-container">

                    <h3>Uitgelicht</h3>

                    <div class="flexbox sector1">
                        <div class="flex_i">
                          <div class="w3-display-container w3-card work-vak">
                            <a href="/projects/wb.php"><img src="images/projects/wb.png" alt="House" style="width:100%">
                            <div class="w3-light-grey w3-padding">SkyLight Website Builder</div></a>
                          </div>
                        </div>
                        <div class="flex_i">
                          <div class="w3-display-container w3-card work-vak">
                            <a href="/projects/nindo.php"><img src="images/projects/nindo.png" alt="House" style="width:100%">
                            <div class="w3-light-grey w3-padding">Nindo</div>
                            </a>
                          </div>
                        </div>
                        <div class="flex_i">
                          <div class="w3-display-container w3-card work-vak">
                            <a href="/https://github.com/RobinBoers/NinjaDO"><img src="https://code.geheimesite.nl/images/projects/ninjado2.png" alt="Nibor" style="width:100%">
                            <div class="w3-light-grey w3-padding">NinjaDO</div>
                            </a>
                          </div>
                        </div>
                        <div class="flex_i">
                          <div class="w3-display-container w3-card work-vak">
                            <a href="/projects/platformgame.php"><img src="images/projects/platformgame.png" alt="House" style="width:100%">
                            <div class="w3-light-grey w3-padding">Platformed</div>
                            </a>
                          </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
        <!-- <footer class="pagefooter w3-center">
            <p>Made by Robin Boers. Starting webdesigner and programmer since 2017. Made with HTML5 and CSS3</p>
        </footer> -->
        <script>
            function openNav() {
              document.getElementById("SmallNav").style.width = "250px";
            }

            /* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
            function closeNav() {
              document.getElementById("SmallNav").style.width = "0";
            }
        </script>
    </body>
</html>