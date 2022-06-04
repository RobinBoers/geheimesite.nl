<!DOCTYPE html>
<html>
    <head>
        <title>
            Over mij - geheimesite.nl | Robin Boers
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="css/main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            include "php/header_nl.php";
        ?>
        <main>
            <div class="w3-row">
                <div class="w3-col l8 s12">
                    <section class="w3-container">
                        <h2>Over mij</h2>
                        <p>Hoi, ik ben Robin. Ik ben 13 jaar, ik zit in de brugklas, en ik woon in Maassluis. Ik houd erg van programmeren, en ik heb daarom een hele tijd geleden deze website gemaakt. (Toen was het een hele andere inhoud). Ik vind programmeren nog steeds gaaf, en ik heb verschilldende andere website's gemaakt, en ik heb een blog over programmeren, en andere technische dingen die ik cool vind. Dat blog vind je hier: <a href="https://www.webdevelopment-en-meer.blogspot.com">Webdevelopment-en-Meer.</a>. Ook houd ik van LEGO-bouwen, fietsen, tekenen, en veel andere dingen. Over deze onderwerpen heb ik ook een blog, dat vind je hier: <a href="https://www.roodoranjegeel.blogspot.com">Rood-Oranje-Geel</a>. Verder speel ik handbal.</p>
                        <h3>Hoe ik in aanraking ben gekomen met progrogrammeren</h3>
                        <p>Ik codeer al sinds groep 7 (2017). Ik ben ermee begonnen omdat ik in de bieb een boek zag staan over website's maken. Nu moet je weten dat ik al sinds groep 4 zo'n computernerd was, die van elk knopje wist wat het deed. Het boek heette <a href="https://www.nano-tips.com/">Cree&euml;ren met code: Zo maak je een website</a>. Dus ik maakte een website, die eind 2017 online kwam. Ik hield enorm veel van geheim  agenten, dus de eerste versies (tot versie 9) gingen daar ook over. Je kunt die versies in mijn "<a href="library/website/overview.php">Website Library</a>" zien. 
                        Ik host mijn website bij <a href="https://www.bhosted.nl/">bHosted</a>. Ik ben daar ongeveer 30 euro per jaar aan kwijt. Ook heb ik een website voor mijn oma gemaakt, die in februari 2018 online ging. (Die site is inmiddels offline) Later heb ik het webdomein aan haar blog gekoppeld, en een mooi thema voor haar blog gemaakt. Lees daar <a href="https://webdevelopment-en-meer.blogspot.com/2019/07/blogger-thema-theme-orange.html">hier</a> meer over. Ook heb ik een website voor het bedrijf van mijn vader gemaakt. Verder ben ik nu bezig van het maken van een coole game.</p>
                        <h3>Wil je ook leren programmeren?</h3>
                        <p>Wil je ook graag websites, apps en programma's kunnen maken? Kijk dan eens naar het <a href="https://www.bol.com/nl/p/html5-en-css3/9200000096082897/?Referrer=ADVNLGOO002008N-G-81885102689-S-472964216282-9200000096082897&gclid=Cj0KCQjw6KrtBRDLARIsAKzvQIFMPd1hacL4rTnYKdGQlMr0W4vroFFLsIE5e4zanmboMDqEx-B3rHIaAo2REALw_wcB">Handboek HTML5 en CSS3</a>, of het boek waarmee ik het geleerd heb: <a href="https://www.nano-tips.com/">Cree&euml;ren met code: Zo maak je een website</a>. Ook is <a href="https://grasshopper.app/">Grasshopper</a> van Code width Google een goed programma, en natuurlijk is <a href="https://www.scratch.mit.edu">Scratch</a> ook altijd een goed begin! Als je de basis snapt, kun je met mijn programma SecretSiteCode gaan spelen. Het is een website, waarop je je code invoer, en live resultaat krijgt. Door op knoppen te klikken kun je code toevoegen, en die komt dat recht achter jouw code te staan. Wil je het eens proberen? Kijk dan eens hier: <a href="library/projects/package/secretsitecode.php">SecretSiteCode Playground</a></p>
                        <h3 id="contact">Contact</h3>
                        <p>Wil je me een mailtje sturen?<br>Dit is een van mijn 5 e-mailadressen: <a href="mailto:robin@geheimesite.nl">robin@geheimesite.nl</a><br>
                        Je kunt ook het onderstaande contactformulier invullen.</p>
                        <form action="../scripts/contact_form.php" method="post">
                            <p>
                                Naam:<br>
                                <input type="text" name="name" placeholder="Jouw naam..."><br>
                                Onderwerp:<br>
                                <input type="text" name="subject" placeholder="Onderwerp..."><br>Bericht:<br>
                                <textarea name="message"></textarea><br>
                                <input type="submit" name="send" value="Verzenden">
                                
                            </p>
                        </form>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39365.680571004195!2d4.218705347976204!3d51.9274773547032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6be6c29b13c1f%3A0xd6195a4cc083b47a!2sMaassluis!5e0!3m2!1snl!2snl!4v1571501037238!5m2!1snl!2snl" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </section>
                </div>
                <div class="w3-col l4">
                    <?php 
                        include "php/sidebar_nl.php";
                    ?>
                </div>
            </div><br>
            
<!--
            <section class="library">
                <div class="left sectiontext two">
                    <h2>Library</h2>
                    <p>
                        Al mijn projecten op 1 plaats. <br>
                        Ontdek oude veries van mijn website, mijn websitebouwer, social media platform en nog veel meer!
                    </p>
                </div>
                <div class="right two">
                    <img class="right cover" src="images/librarycover.png">
                </div>
            </section>
            <section class="parralax codep">
                <div class="sectiontext two">
                    <h2>Learn Code: SecretSiteCode</h2>
                    <p>
                        Altijd al website's willen bouwen? Altijd al willen leren programmeren? Dit is je kans! Met SecretSiteCode kun je makkelijk aan de slag met prgrammeren, klik op een knop, voer de tekst in, en kijk wat de code is, en als het moeilijk is, zijn er altijd nog videotutorials, je hoeft geen account te hebben om het te kunnen gebruiken, en het is helemaal gratis!
                        <br><a href="library/projects/secretsitecode/">Ontdek het!</a>
                    </p>
                </div>
            </section>
            <section class="dgaw" style="background:#c2caef;">
                <div class="left" style="width:40%;">
                    <img class="left cover" src="images/nindo/logo.png">
                </div>
                <div class="right sectiontext" style="width:60%;">
                    <h2>Nindo.</h2>
                    <p>
                        Nindo is een platform waar je berichten kunt plaatsen en dingen delen. Het is gekoppeld aan een dgaw-account. Je kunt er chatten met andere en dingen delen. Ook kan je er (ook zonder account) games spelen. Ik heb het een update gegeven, en het ziet er nu nog beter uit! Je kunt onderandere nu profielen zoeken, een beschrijving maken voor je profiel, en de berichten worden netjes uitgelijnd. Je kunt nu ook chatten, en berichten plaaten vanuit één venster!
                    </p>
                </div>
            </section>
-->
        </main>
        <footer class="pagefooter w3-center">
            <p>Gemaakt door Robin Boers. Beginnend Webdesigner en programmeur sinds 2017. Gemaakt met HTML5 en CSS3.</p>
        </footer>
    </body>
</html>