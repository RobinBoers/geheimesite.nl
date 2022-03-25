<?php
    include "../connection.php";

    header('Access-Control-Allow-Origin: https://blog.geheimesite.nl');
    header('Access-Control-Allow-Methods: GET, POST');
    header('Content-Type: application/json; charset=utf-8');

    if(isset($_GET['url'])){ 
        $requestUrl = $_GET['url'];
        addView($requestUrl);
    }

    function addView($url) {
        global $conn;
        
        $url = $conn->real_escape_string($url);

        $select_query = "SELECT * FROM viewcount WHERE url = '$url'";
        $result = $conn->query($select_query);

        if($result->num_rows == 1) {
            $views = $row->views + 1;
            $update_query = "UPDATE userinfo SET views='$views' WHERE url='$url'";
            $conn->query($update_query);

            echo json_encode("Succes.");
        } else {
            $insert_query = "INSERT INTO viewcount (url, views) VALUES ('$url', 0)";
            $conn->query($insert_query);

            echo json_encode("Succes.");
        }
    }
?> 