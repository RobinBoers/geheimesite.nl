<?php
    include "../connection.php";

    header('Access-Control-Allow-Origin: https://blog.geheimesite.nl');
    header('Access-Control-Allow-Methods: GET, POST');
    header('Content-Type: application/json; charset=utf-8');
    
    if(isset($_GET['url'])){ 
        $requestUrl = $_GET['url'];
        if (strpos($requestUrl, 'https://blog.geheimesite.nl') !== false) {
            getViews($requestUrl);
        }
    }

    function getViews($url) {
        global $conn;

        $url = $conn->real_escape_string($url);

        $select_query = "SELECT * FROM viewcount WHERE url = '$url'";
        $result = $conn->query($select_query);

        if($result->num_rows != 0) {
            $views = 0;

            while($row = $result->fetch_object()) {
                $views += $row->views;                
            }

            $response = new stdClass();
            $response->views = $views;

            echo json_encode($response);
        } else {
            $response = new stdClass();
            $response->views = 0;

            echo json_encode($response);
        }
    }
?> 