<?php
    $dbServerName = "localhost"; //servername here
    $dbUserName = "robinb_views"; // user to use for login
    $dbPassword = "xs6cr87TPyYX"; // password to use (leave empty for no password)
    $dbName = "robinb_views"; // database name
    $conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);
    
    if($conn->connect_error) {
        die("Connection failed " . $conn->connect_error);
    } 
    else {
        mysqli_select_db($conn, $dbName);        
    }

    function consolelog($message) {
        echo "<script>console.log('$message');</script>";
    }
?>