<?php

$_SERVER["DOCUMENT_ROOT"] = empty($_SERVER["DOCUMENT_ROOT"]) ? $_SERVER["PWD"] . "/www" : $_SERVER["DOCUMENT_ROOT"];

$requested_file = substr($_SERVER["REQUEST_URI"], 1, strlen($_SERVER["REQUEST_URI"]) - 1);
$file_path = $_SERVER["DOCUMENT_ROOT"] . "/" . $requested_file;

if (file_exists($file_path)) {
    return false;
} else if (file_exists($file_path . ".php")) {
    require_once($file_path . ".php");
    return true;
} else {
    require_once($_SERVER["DOCUMENT_ROOT"] . "/404.shtml");
    return true;
}