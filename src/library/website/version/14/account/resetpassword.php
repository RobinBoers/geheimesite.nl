<link rel="stylesheet" href="../css/main.css" type="text/css">
<!-- Styleregels die alleen hier tellen -->
<style>
    body {
        padding: 100px !important;
    }
</style>
<body class="frame">
<h1>Wachtwoord resetten</h1>
<?php
    session_start();
    if(isset($_GET['token']) && isset($_GET['id'])) {
        include("../connection.php");

        $token = strip_tags($_GET['token']);
        $id = strip_tags($_GET['id']);

        $token = $conn->real_escape_string($token);
        $id = $conn->real_escape_string($id);
        
        $checkForAccounts = "SELECT * FROM userinfo WHERE id = '$id' AND token = '$token'";
                
        $result = $conn->query($checkForAccounts);
        
        if($result->num_rows == 1) {
            if(isset($_GET['newpass'])) {

                $pass = strip_tags($_GET['newpass']);
                $pass = $conn->real_escape_string($pass);
                $pass = password_hash($pass, PASSWORD_BCRYPT);

                $conn->query("UPDATE userinfo SET token='' WHERE id = '$id'");

                if($conn->query("UPDATE userinfo SET password='$pass' WHERE id = '$id'")) {
                    ?>
                    <p>
                        <b>WOOHOO!</b><br>
                        Uw wachtwoord is succesvol gereset!<br>
                        <a href="index.php">OK</a>
                    </p>
                    <?php
                }

            } else {
                ?>
                <form method="get">
                    <input type="password" name="newpass">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <input type="hidden" name="token" value="<?php echo $token ?>">
                    <input type="submit" name="submit" value="Change password">
                </form>
                <?php
            }
        }
        else {
            ?>
                <p>
                    <b>Oeps!</b><br>
                    Uw token is verlopen. Probeer het opnieuw.<br>
                    <a href="forgetpassword.php">OK</a>
                </p>
                <?php
        }
    }
?>
</body>