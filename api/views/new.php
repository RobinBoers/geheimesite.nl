<?php
    include "../connection.php";

    header('Access-Control-Allow-Origin: https://blog.geheimesite.nl');
    header('Access-Control-Allow-Methods: GET, POST');
    header('Content-Type: application/json; charset=utf-8');

    if(isset($_GET['url'])){ 
        $requestUrl = $_GET['url'];
        if (strpos($requestUrl, 'https://blog.geheimesite.nl') !== false) {
            addView($requestUrl);
        }
    }

    function addView($url) {
        global $conn;
        
        $url = $conn->real_escape_string($url);
        $current_month = date('Y-m-01');

        $select_query = "SELECT * FROM viewcount WHERE url = '$url' and month='$current_month'";
        $result = $conn->query($select_query);

        if($result->num_rows == 1) {
            while($row = $result->fetch_object()) {
                $views = $row->views + 1;
                $update_query = "UPDATE viewcount SET views=$views WHERE url='$url' and month='$current_month'";
                $conn->query($update_query);

                echo json_encode("Succes.");
            }
        } else {
            $insert_query = "INSERT INTO viewcount (url, views, month) VALUES ('$url', 1, '$current_month')";
            $conn->query($insert_query);

            echo json_encode("Succes.");
        }
    }
?> 