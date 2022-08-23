<link rel="stylesheet" href="../css/main.css" type="text/css">
<!-- Styleregels die alleen hier tellen -->
<style>
    body {
        padding: 100px !important;
    }
</style>

<body class="frame">
    <h1>Wachtwoord opvragen</h1>
    <p>Je kunt hier, als je een emailadres in je account hebt opgeslagen, je wachtwoord opvragen</p>
    <form method="post">
        <p>Gebruikersnaam:</p>
        <input name="name" type="text" spellcheck="false" placeholder="Vul hier uw gebruikersnaam in..."><br>
        <input name="forget" value="Opvragen" type="submit">
    </form>
    <?php
    session_start();
    if (isset($_POST['forget'])) {
        include("../connection.php");
        $username = strip_tags($_POST['name']);
        $username = $conn->real_escape_string($username);

        $checkForAccounts = "SELECT * FROM userinfo WHERE username = '$username'";

        $result = $conn->query($checkForAccounts);

        if ($result->num_rows == 1) {
            while ($row = $result->fetch_object()) {
                $email = $row->email;

                if (isset($email) && $email !== "") {
                    $token = uniqid();
                    $token = strip_tags($conn->real_escape_string($token));

                    if ($conn->query("UPDATE userinfo SET token='$token' WHERE id = '$row->id'")) {
                        $url = "https://geheimesite.nl/account/resetpassword.php?token=" . $token . "&id=" . $row->id;

                        $msg = "U hebt op de knop 'Wachtwoord vergeten' geklikt \nHebt u niet  op deze knop geklikt, dan kunt u deze e-mail negeren.\nKlik hier om uw wachtwoord te resetten: $url\n\n\nDit is een automatische e-mail waarmee het wachtwoord van uw DGAW, Nindo, GeheimAgent of geheimesite-account kan worden gereset.";

                        $msg = wordwrap($msg, 70);

                        if (mail($email, "Wachtwoord voor \"geheimesite.nl\" opnieuw instellen", $msg)) {
    ?>
                            <p>
                                <b>Email verstuurd</b><br>
                                Er is een automatische email naar uw account verstuurd.<br>
                                <a href="index.php">OK</a>
                            </p>
                        <?php
                        } else {
                        ?>
                            <p>
                                <b>Oeps!</b><br>
                                Er is iets foutgegaan bij het versturen van de email. Neem contact op met de beheerder via <a href="mailto:hello@geheimesite.nl">hello@geheimesite.nl</a>. EMAIL_SERVER_FAILED<br>
                                <a href="index.php">OK</a>
                            </p>
                        <?php
                        }
                    } else {
                        ?>
                        <p>
                            <b>Oeps!</b><br>
                            Er is iets foutgegaan bij het versturen van de email. Neem contact op met de beheerder via <a href="mailto:hello@geheimesite.nl">hello@geheimesite.nl</a>. TOKEN_CHANGE_FAILED<br>
                            <a href="index.php">OK</a>
                        </p>
                    <?php
                    }
                } else {
                    ?>
                    <p>
                        <b>Oeps!</b><br>
                        Er was geen geldig emailadres in uw account aangetroffen. Brute force dan maar? :)<br>
                        <a href="index.php">OK</a>
                    </p>
            <?php
                }
            }
        } else {
            ?>
            <p>
                <b>Oeps!</b><br>
                Er was geen account gevonden met die gebruikersnaam.<br>
                <a href="index.php">OK</a>
            </p>
    <?php
        }
    }
    ?>
</body>