<!DOCTYPE html>
<html>
    <head>
        <title>
            Mijn account - geheimesite.nl
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="../css/main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            include "../php/header.php";
            include("../connection.php");
                
            if($_SESSION['login19'] == true) {
                if(isset($_POST['email'])) {
                    $email = strip_tags($_POST['email']);
                    $username = $_SESSION['username'];
                    $id = $_SESSION['id'];

                    $email= $conn->real_escape_string($email);
                    $username= $conn->real_escape_string($username);

                    $sql = "UPDATE userinfo SET email='$email' WHERE username = '$username' AND id = '$id'";

                    $result = $conn->query($sql);

                    $_SESSION['email'] = $email;

                    header("Location: ../account/index.php?success-email");
                }
            }
        ?>
    </body>
</html>