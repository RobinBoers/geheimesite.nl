<?php
    include "../connection.php";

    if(isset($_GET['url'])){ 
        $requestUrl = $_GET['url'];
        getViews($requestUrl);
    }

    function getViews($url) {
        $url = $conn->real_escape_string($url);

        $select_query = "SELECT * FROM viewcount WHERE url = '$url'";
        $result = $conn->query($select_query);

        if($result->num_rows == 1) {
            $response = new stdClass();
            $response->views = $row->views;

            echo json_encode($response);
        } else {
            $response = new stdClass();
            $response->views = 0;

            echo json_encode($response);
        }
    }
?> 