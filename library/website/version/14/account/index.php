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
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue.css">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="frame">
            <?php
                include "../php/header.php";
                if($_SESSION["login19"] == true) { 
                include("../connection.php");
            ?>
            <main>
                <section class="w3-container account">
                    <h2>Hallo, <?php echo($_SESSION['nickname']); ?></h2>
                    <?php

                    if(isset($_GET['success-email'])) {
                        ?>
                        <p class="msg">Je emailadres is successvol veranderd naar: <?php echo $_SESSION['email'] ?></p>
                        <?php
                    }

                    if(isset($_GET['success-pswd'])) {
                        ?>
                        <p class="msg">Je wachtwoord is successvol veranderd.</p>
                        <?php
                    }

                    if(isset($_GET['wrong'])) {
                        ?>
                        <p class="error">Wachtwoord incorrect. Heb je het goed gespeld?</p>
                        <?php
                    }

                    ?>
                    <?php

                        $id = $_SESSION['id'];
                            

                        //echo($id);

                        $sql = "SELECT * FROM userinfo WHERE id = '$id'";

                        $result = $conn->query($sql);

                        if($result->num_rows == 1) {
                            while($row = $result->fetch_object()) {
                                $username = $row->username;
                                $nickname = $row->nickname;
                                $user_id = $row->id;
                                $email = $row->email;   
                                
                                $profile_picture = "/images/nindo/profiel.png";
                                
                                ?>

                                <div class="w3-card w3-round profile-box">
                                    <div style="padding:0px; padding-top: 5px;" class="w3-container">
                                    <button style="padding:5px" class="w3-button w3-right" onclick="toggleSettings()"><i class="fa fa-cog"></i> Instellingen</button>
                                    <img src="../images/nindo/profiel.png" class="w3-margin w3-left w3-circle" style="height:80px;width:80px" alt="Profielfoto">
                                    <br><h4 class="w3-margin-left">
                                        <?php echo($nickname); ?>
                                        <span style="font-size:16px;font-weight:normal;display:block;">@<?php echo($username); ?></span>
                                    </h4>
                                    <p class="w3-clear"> </p>
                                    <hr>
                                    <?php include "../scripts/getapps.php" ?>
                                    
                                    </div>
                                </div><br>
                                <?php
                            }
                        }
                        else {
                            ?>
                                <p>
                                    Er is iets fout gegaan.<br>
                                </p>
                            <?php
                        }
                    ?>                    
                </section>
                <section id="settings" class="w3-container">
                    <h3>Instellingen</h3>
                    <hr>
                    <h5>Verander wachtwoord</h5>
                    <form method="post" action="../scripts/newpass.php">
                        <input type="password" name="oldpassword" placeholder="Oud wachtwoord"> 
                        <input type="password" name="newpassword" placeholder="Nieuw wachtwoord"> 
                        <input type="submit" name="newpass" value="Opslaan">
                    </form>
                    <h5>Verander emailadres</h5>
                    <p>Je emailadres wordt alleen gebruikt voor het opvragen van je wachtwoord en is volledig optioneel</p>
                    <form method="post" action="../scripts/newemail.php">
                        <input type="email" placeholder="Uw e-mailadres..." name="email">
                        <input type="submit" value="Opslaan">
                    </form><br>
                </section>
            </main>
            <?php } else {
                header("Location: inloggen.php");
            } ?>
        </div>
        <script>
            document.getElementById("settings").style.display = "none";
            var settingsVisible = false;

            function toggleSettings() {
                if(settingsVisible == false) {
                    settingsVisible = true;
                    document.getElementById("settings").style.display = "block";
                } else {
                    settingsVisible = false;
                    document.getElementById("settings").style.display = "none";
                }
            }
        </script>
    </body>
</html>