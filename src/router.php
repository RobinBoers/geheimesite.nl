<?php

$_SERVER["DOCUMENT_ROOT"] = empty($_SERVER["DOCUMENT_ROOT"]) ? $_SERVER["PWD"] . "/www" : $_SERVER["DOCUMENT_ROOT"];

$requested_url = substr($_SERVER["REQUEST_URI"], 1, strlen($_SERVER["REQUEST_URI"]) - 1);
$requested_file = explode("?", $requested_url)[0];
$file_path = $_SERVER["DOCUMENT_ROOT"] . "/" . $requested_file;

if(explode("/", $requested_file)[0] === "images") {
    $requested_file = "assets/" . $requested_file;
    $file_path = $_SERVER["DOCUMENT_ROOT"] . "/" . $requested_file;

    if(file_exists($file_path)) {
        require_once($file_path);
        true;
    } else {
        require_once($_SERVER["DOCUMENT_ROOT"] . "/404.shtml");
        return true;
    }
} else if (file_exists($file_path)) {
    return false;
} else if (file_exists($file_path . ".php")) {
    require_once($file_path . ".php");
    return true;
} else {
    require_once($_SERVER["DOCUMENT_ROOT"] . "/404.shtml");
    return true;
}