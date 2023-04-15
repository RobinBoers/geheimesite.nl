<?php
    $dbServerName = "server-name-here";
    $dbUserName = "server-username-here";
    $dbPassword = "database-password-here";
    $dbName = "database-name-here"; 
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