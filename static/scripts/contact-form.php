<?php
if (isset($_POST['send'])) {
    $from = $_POST["email"];
    $message = $_POST["message"];
    $subject = $_POST["subject"];

    $message = wordwrap($message, 70, "\r\n");
    $headers = "From: $from";

    mail("hello@geheimesite.nl", $subject, $message, $headers);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
