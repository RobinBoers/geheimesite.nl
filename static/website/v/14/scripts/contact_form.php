<?php
if(isset($_POST['send'])){
    
$message = $_POST["message"];
$subject = $_POST["subject"];
$person = $_POST["name"];

$message = "Nieuw bericht van: $person.\n".$message;

// Breek de regels af als ze langer zijn dan 70 karakters
$message = wordwrap($message, 70, "\r\n");

// Verzend de e-mail
mail('hello@geheimesite.nl', $subject, $message);
}
