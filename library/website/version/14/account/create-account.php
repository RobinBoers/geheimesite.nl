<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
session_start();
    if(isset($_POST['create'])) {
        include("../connection.php");
        $username = strip_tags($_POST['username']);
        $password = strip_tags($_POST['password']);
        $nickname = strip_tags($_POST['nickname']);
        
        $username = $conn->real_escape_string($username);
        $password = $conn->real_escape_string($password);
        $nickname = $conn->real_escape_string($nickname);

        $password = password_hash($password, PASSWORD_BCRYPT);
        
//        $checkForOldAccounts = "SELECT id, username, password, nickname FROM userinfo WHERE username = '$username' AND nickname = '$nickname'";
        $checkForOldAccounts = "SELECT id, username, password, nickname FROM userinfo WHERE username = '$username'";
                
        $result = $conn->query($checkForOldAccounts);
        
        if($result->num_rows == 0) {
            $newaccount = "INSERT INTO userinfo (id, username, password, nickname, permissions) VALUES (NULL, '$username', '$password', '$nickname', 'default')";

            $create = $conn->query($newaccount);
            ?>
            <p>
                Je account is aangemaakt!<br>
                Als extra beveiliging moet je eerst nog inloggen.<br>
                <a href="inloggen.php">Inloggen</a>
            </p>
            <?php
        }
        else {
            ?>
                <p style="font-family:sans-serif;">
                    <b>Oeps!</b><br>
                    Er was al een account met die naam!<br>
                    <a href="aanmelden.php">Probeer opnieuw</a>
                </p>
                <?php
        }
    }
?>