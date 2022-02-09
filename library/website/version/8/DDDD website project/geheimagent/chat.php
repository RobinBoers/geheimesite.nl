<?php
include 'claim.php';
include 'logout.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>DGAW Chat</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <script language="JavaScript"><!--
// Dropdownmenu gemaakt met de
// generator op Anouksweb
// URL: http://www.anouksweb.nl
function goThere(form){
	var linkList=form.selectThis.selectedIndex
	if(!linkList==""){window.location.href=form.selectThis.options[linkList].value;}
}
//--></script>
    </head>
    <body>
        <div class="bgwhite">
            <header class="paginaheader">
            <nav class="large">
                <ul>
                    <li><a href="http://www.geheimesite.nl/">Start</a></li>
                    <li><a href="http://www.geheimesite.nl/over-mij.html">Over mij</a></li>
                    <li><a href="http://www.dddd.geheimesite.nl/">DDDD</a></li>
                    <li><a href="http://www.dgaw.geheimesite.nl/">DGAW</a></li>
                    <li><a href="http://www.spel.geheimesite.nl/">Spelletjes en Games</a></li>
                </ul>
            </nav>
            <nav class="small">
                <form name="dropMenu">
                   <select name="selectThis" size="1" onChange="goThere(this.form);">
                        <option selected value="">selecteer pagina
                        <option value="http://www.geheimesite.nl/">Start
                        <option value="http://www.geheimesite.nl/over-mij.html">Over mij
                        <option value="http://www.dddd.geheimesite.nl/">DDDD
                        <option value="http://www.dgaw.geheimesite.nl/">DGAW
                        <option value="http://www.geheimesite.nl/raadsels">Raadsels
                   </select>
                </form>
            </nav>
        </header>
        </div>
        <header class="pageheader">
            <img src="../logo.png" style="float: left;display: inline;padding-right: 20px;" width="100px" height="100px">
            <h2>
                 DGAW
                <span class="onderkop">De geheim agenten webapp</span>
            </h2>
            <div class="bordnav">
                <ul>
                    <li><a href="http://www.dgaw.geheimesite.nl/">Home!</a></li>
                    <li><a>Chat!</a></li>
                    <li><a href="../games/index.html">Games!</a></li>
                    <li><a href="../nindo/index.php">Nindo!</a></li>
                </ul>
            </div>
        </header>
        <?php
            if(isset($_GET['logout'])){ 

            //Simple exit message
            $fp = fopen("log.html", 'a');
            fwrite($fp, "<div class='go'><i>". $_SESSION['name'] ." heeft de chat verlaten</i><br></div>");
            fclose($fp);

            session_destroy();
            header("Location: index.php"); //Redirect the user
            }
            if(!isset($_SESSION['name'])){
                loginForm();
            }
            else{
        ?>
        <article class="chatvak">
            <h1 id="h">Chat!</h1>
            <p class="left">Halo, <b><?php echo $_SESSION['name']; ?></b><br></p>
            <div style="clear:left;"></div>
            <div class="hierkomenberichten" id="chatbox">
            <?php
            if(file_exists("log.html") && filesize("log.html") > 0){
                $handle = fopen("log.html", "r");
                $contents = fread($handle, filesize("log.html"));
                fclose($handle);

                echo $contents;
            }
            ?>
            </div>
            <p>Bericht:</p>
            <form method="post" name="message" action="">
                <input name="usermsg" type="text" id="usermsg">
                <input name="submitmsg" type="submit"  id="submitmsg" value="Send">
            </form>
            <hr>
            <span class="logout"><a id="exit" href="#">Exit Chat</a></span>
        </article>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
        <script type="text/javascript">
        // jQuery Document
        $(document).ready(function(){ //2500 old
            setInterval (loadLog, 500);	//Reload file every 2500 ms or x ms if you wish to change the second parameter
            //Als de gebruiker wil stoppen met chatten
            $("#exit").click(function(){
                var exit = confirm("Wil je echt stoppen met chatten?");
                if(exit==true){window.location = 'index.php?logout=true';}		
            });
            //If user submits the form
            $("#submitmsg").click(function(){	
                var clientmsg = $("#usermsg").val();
                $.post("post.php", {text: clientmsg});				
                $("#usermsg").attr("value", "");
                return false;
            });
            //Load the file containing the chat log
            function loadLog(){		
                var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height before the request
                $.ajax({
                    url: "log.html",
                    cache: false,
                    success: function(html){		
                        $("#chatbox").html(html); //Insert chat log into the #chatbox div	

                        //Auto-scroll			
                        var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height after the request
                        if(newscrollHeight > oldscrollHeight){
                            $("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
                        }				
                    },
                });
            }
        });   
        </script>
        <?php
        }
        ?>
    </body>
</html>