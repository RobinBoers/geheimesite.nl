<!--<link rel="stylesheet" href="/css/main.css">-->
<?php
session_start();

if(!isset($_SESSION['login19'])) {
    $_SESSION['login19'] = false;
}
?>
<header>
  <div class="w3-red w3-bar w3-wide w3-padding">
    <a href="/library/website/nindo/index.php" class="w3-bar-item w3-button"><b>NINDO</b></a>
    <div class="w3-right w3-hide-small">
        <a href="/index.php" class="w3-bar-item w3-button">Home</a>
        <a href="#" class="w3-bar-item w3-button">Chat</a>
        <a href="#" class="w3-bar-item w3-button">People</a>
        <a href="#" class="w3-bar-item w3-button">Images</a>
    </div>
  </div>
</header> 
<iframe style="display:none !important;" src="/php/notify.php">
</iframe>