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
        <div class="bgimg">
            <div id="SmallNav" class="small-nav">
                <a href="javascript:void(0)" class="close nodec" onclick="closeNav()">&times;</a>
                <a href="index.php" class="w3-button">Home</a>
                <a href="over-mij.php" class="w3-button">Over mij</a>
                <a href="https://github.com/RobinBoers" class="w3-button">GitHub</a>
                <a href="projecten.php" class="w3-button">Projecten</a>
                <a href="https://code.geheimesite.nl" class="w3-button">Beta projecten</a>
                <a href="/account" class="w3-button">Inloggen</a>
            </div>
            <div class="frame">
              <header>
                  <span class="hp-small" onclick="openNav()"><i class="fas fa-bars"></i></span>
                  <center class="hp-menu">
                      <a href="index.php" class="w3-button">Home</a>
                      <a href="over-mij.php" class="w3-button">Over mij</a>
                      <a href="https://github.com/RobinBoers" class="w3-button">GitHub</a>
                      <a href="projecten.php" class="w3-button">Projecten</a>
                      <a href="https://code.geheimesite.nl" class="w3-button">Beta projecten</a>
                      <a href="/account" class="w3-button">Inloggen</a>
                  </center>
              </header>
            </div>
            <section class="hp-about">
              <div class="hp-about-inner">
                <img class="me-profile about-flex-i" src="images/p-youtube.jpg">
                <div class="about-flex-i about-text">
                  <h2>Robin Boers</h2>
                  <p> 
                    Ik ben webdesigner, programmeur, YouTuber en tiener, en mijn hobby's zijn programmeren, video-editing, handbal en tekenen. <br>
                    Ik maak video's en tutorials over programmeren en video-editing. <br>
                    Verder spreek ik Nederlands, Engels, HTML, CSS, JavaScript, PHP en een beetje MySQL. Op deze website host ik mijn projecten. <br>
                  </p>
                </div>  
              </div>
            </section>
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