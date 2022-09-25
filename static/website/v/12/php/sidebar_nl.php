<section class="w3-container w3-margin w3-margin-top">
    <img class="profilePhoto" src="https://lh3.googleusercontent.com/proxy/vRICrvOyCPbLQTOngE5vT3PbxYREOhdvWXINtpNqehUGSc8evNmrS1oqolREtpnx_emhmIgRImej6Zv-yVE15x5nScP7=s0-d" alt="Robin Boers"><br><br>
    <h3>Robin Boers</h3>
    <p>Heyy, ik ben Robin. Ik ben 13 jaar, en zit in de brugklas.
        Ik houd van handballen en programmeren. Ik spreek HTML, CSS, PHP en Javascript. Verder heb ik 5 emailadressen, en een blog.
        Wil je meer van mijn projecten zien?? Neem eens een kijkje op de <a href="projecten.php">"Projecten"</a> pagina.<br>
        Mijn blog: <a href="https://www.webdevelopment-en-meer.blogspot.com">Webdevelopment-En-Meer</a>
    </p>
    <h4>Contact</h4>
    <p>Je kan me bereiken via e-mail: <a href="mailto:hello@geheimesite.nl">hello@geheimesite.nl</a></p>
</section>
<hr>
<section class="w3-container w3-margin w3-margin-top">
    <h3>Blog</h3>
    <p>
        Wil je mijn blog zien? Kijk hier eens:<br>
        <a href="http://www.webdevelopment-en-meer.blogspot.com">Webdevelopment-en-Meer</a>
    </p>
</section>
<hr>
<section class="w3-container w3-margin w3-margin-top">
    <h3>Account</h3>
    <?php
    if ($_SESSION['login19'] === true) {
    ?><li><a href="/account/index.php">Mijn account</a></li>
        <li><a href="/account/uitloggen.php">Uitloggen</a></li><?php
                                                            } else {
                                                                ?><li><a href="/account/inloggen.php">Inloggen</a></li>
        <li><a href="/account/aanmelden.php">Aanmelden</a></li><?php
                                                            } ?>
</section>