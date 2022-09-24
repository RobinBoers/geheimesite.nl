<!DOCTYPE html>
<html>
    <head>
        <title>
            Blog - geheimesite.nl | Robin Boers
        </title>
        <meta charset="UTF-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
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
                    <!-- Blog -->
                    <?php
                        include "../php/blog.php";
                    ?>
                </section>
            </main>
        </div>
        <footer class="pagefooter w3-center">
            <p>Gemaakt door Robin Boers. Beginnend Webdesigner en programmeur sinds 2017. Gemaakt met HTML5 en CSS3</p>
        </footer>
    </body>
</html>