<?php
session_start();
include "../connection.php";

//Account en datum bekijken
$id = $_SESSION["id"];
$vandaag = date('l j F H:i');

// Laats online bijwerken
$sql = "UPDATE `userinfo` SET `last_login` = '$vandaag' WHERE `userinfo`.`id` = $id;";
$result = $conn->query($sql);

// Uitloggen
session_unset();
session_destroy();
header('Location: ../index.php');
exit();
?>