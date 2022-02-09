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
            include "../connection.php";

            if($_SESSION['login19'] == true) {
                if(isset($_POST['newpass'])) {
                    $old_password = strip_tags($_POST['oldpassword']);
                    $password = strip_tags($_POST['newpassword']);
                    $username = $_SESSION['username'];
                    $id = $_SESSION['id'];

                    $old_password= $conn->real_escape_string($old_password);
                    $password= $conn->real_escape_string($password);
                    $username= $conn->real_escape_string($username);

                    $password = password_hash($password, PASSWORD_BCRYPT);

                    $sql = "SELECT password FROM userinfo WHERE username = '$username'";
                    $result = $conn->query($sql);

                    if($result->num_rows == 1) {
                        while($row = $result->fetch_object()) {
            
                            if(password_verify($old_password, $row->password)) {
                                $sql = "UPDATE userinfo SET password='$password' WHERE username = '$username' AND id = '$id'";

                                $result = $conn->query($sql);
            
                                // Naar accountbeheer
                                header('Location: ../account/index.php?success-pswd');
                            } else {
                                header('location: ../account/index.php?wrong');
                            }                                
                            
                        }
                    } else {
                            header('location: inloggen.php?wrong');
                    }
                }
            }
        ?>
    </body>
</html>