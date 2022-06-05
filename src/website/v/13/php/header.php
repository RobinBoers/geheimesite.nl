<!--<link rel="stylesheet" href="/css/main.css">-->
<?php
session_start();

if(!isset($_SESSION['login19'])) {
    $_SESSION['login19'] = false;
}

?>

<div id="SmallNav" class="small-nav">
    <a href="javascript:void(0)" class="close nodec" onclick="closeNav()">&times;</a>
    <a href="index.php" class="w3-button">Home</a>
    <a href="over-mij.php" class="w3-button">Over mij</a>
    <a href="https://github.com/RobinBoers" class="w3-button">GitHub</a>
    <a href="projecten.php" class="w3-button">Projecten</a>
    <a href="https://code.geheimesite.nl" class="w3-button">Beta projecten</a>
    <a href="/account" class="w3-button">Inloggen</a>
</div>

<header>
  <div class="w3-bar w3-padding">
      <h1 style="font-size:18px;"><a href="/index.php" class="w3-bar-item w3-button"><b>GEHEIMESITE.NL</b></a></h1>
      <div class="w3-right w3-hide-small">
          <a href="index.php" class="w3-bar-item w3-button">Home</a>
          <a href="over-mij.php" class="w3-bar-item w3-button">Over mij</a>
          <a href="https://github.com/RobinBoers" class="w3-bar-item w3-button">GitHub</a>
          <a href="projecten.php" class="w3-bar-item w3-button">Projecten</a>
          <a href="https://code.geheimesite.nl" class="w3-bar-item w3-button">Beta projecten</a>
          <a href="/account" class="w3-bar-item w3-button">Inloggen</a>
      </div>
      <div class="w3-right">
          <span class="smallNavButton w3-bar-item w3-button" onclick="openNav()"><i class="fas fa-bars"></i></span>
      </div>
  </div>
</header><br><br>

<script>
    function openNav() {
      document.getElementById("SmallNav").style.width = "250px";
    }

    /* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
    function closeNav() {
      document.getElementById("SmallNav").style.width = "0";
    }
</script>