<?php
 
function loginForm(){
    echo'
    <form action="index.php" method="post">
        <p>Kies voor je de chat betreed een nickname:</p>
        <label for="name">Nickname:</label>
        <input type="text" name="name" id="name" />
        <input type="submit" name="enter" id="enter" value="Claim!" />
    </form>
    ';
}
 
if(isset($_POST['enter'])){
    if($_POST['name'] != ""){
        $_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
    }
    else{
        echo '<span class="error">Please type in a name</span>';
    }
}
