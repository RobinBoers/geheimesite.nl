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
    <a href="/website/nindo" class="w3-button">Inloggen</a>
</div>

<div class="w3-bar w3-red w3-padding">
    <a href="index.php" class="w3-bar-item w3-button"><b>GEHEIMESITE.NL</b></a>
    <div class="w3-right w3-hide-small">
        <a href="index.php" class="w3-bar-item w3-button">Home</a>
        <a href="over-mij.php" class="w3-bar-item w3-button">Over mij</a>
        <a href="https://github.com/RobinBoers" class="w3-bar-item w3-button">GitHub</a>
        <a href="projecten.php" class="w3-bar-item w3-button">Projecten</a>
        <a href="https://code.geheimesite.nl" class="w3-bar-item w3-button">Beta projecten</a>
        <a href="/website/nindo" class="w3-bar-item w3-button">Nindo</a>
    </div>
    <div class="w3-right">
        <span class="smallNavButton w3-bar-item w3-button" onclick="openNav()"><i class="fas fa-bars"></i></span>
    </div>
</div>

<br>
<br>

<script>
    function openNav() {
      document.getElementById("SmallNav").style.width = "250px";
    }

    /* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
    function closeNav() {
      document.getElementById("SmallNav").style.width = "0";
    }
</script>