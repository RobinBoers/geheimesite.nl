<!DOCTYPE html>
<html>
    <head>
        <title>
            Inloggen - geheimesite.nl
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="../css/main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="frame">
            <?php
                include "../php/header.php";
            ?>
            <main>
                <section class="w3-container">
                    <h2>Inloggen</h2>

                    <?php

                        // Show warning if the user enters a wrong password or username
                        if(isset($_GET['wrong'])) {
                            ?><p class="error">Verkeerd wachtwoord of gebruikersnaam.</p><?php
                        }

                    ?>
                    <form action="login.php" method="post">
                        <p>
                            Gebruikersnaam:<br>
                            <input required type="text" name="username" placeholder="Gebruikersnaam..."><br>
                            Wachtwoord:<br>
                            <input required type="password" name="password" placeholder="Wachtwoord...">
                            <input class="btn" type="submit" name="login" value="Login">
                        </p>
                        <p class="formlink">Heb je nog geen account? <a href="aanmelden.php">Account aanmaken</a><br><a href="forgetpassword.php">Wachtwoord vergeten?</a></p>
                    </form>
                </section>
            </main>
        </div>
    </body>
</html>