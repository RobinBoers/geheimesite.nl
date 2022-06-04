<?php
    include "token.php";

    header('Access-Control-Allow-Origin: https://geheimesite.nl');
    header('Access-Control-Allow-Methods: GET');
    header('Content-Type: application/json; charset=utf-8');
    
    if(isset($_GET['id'])){ 
        $shelveID = $_GET['id'];
        getBookshelve($shelveID);
    }

    function getBookshelve($shelveID) {
        global $token;

        $url = "https://micro.blog/books/bookshelves/$shelveID";
        $headers = array(
            "Authorization: Bearer $token"
        );

        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);
        curl_close($curl);
        
        echo $resp;
    }
?> 