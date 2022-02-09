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
                    <h2>Aanmelden</h2>
                    <form action="create-account.php" method="post">
                        <label for="newusername">Voer hier je gebruikersnaam in:</label><br>
                        <input type="text" name="username"><br>
                        <label for="newnickname">Voer hier je nickname in:</label><br>
                        <input type="text" name="nickname"><br>
                        <label for="newpassword">Voer hier je wachtwoord in:</label><br>
                        <input type="password" name="password"><br>
                        <input type="submit" name="create" value="Aanmaken" />
                        <p class="formlink">Heb je al een account? <a href="inloggen.php">Inloggen</a><br>Door een account aan te maken, accepteer je de <a href="gebruikersvoorwaarden.php">gebruikersvoorwaarden</a></p>
                    </form>
                </section>
            </main>
        </div>
    </body>
</html>