<?php session_start(); ?>
<script src="notification.js"></script>
<script>
var img = 'https://www.geheimesite.nl/logo2.png';
function notifyMe(type) {
  if (!("Notification" in window)) {
    alert("Sorry, jouw browser (ding waarmee je op het internet zit) ondersteund geen notificatie's, daarom kunnen we helaas geen push meldingen geven als je een berichtje krijgt. SORRY");
  }

  else if (Notification.permission === "granted") {
    var notification = new Notification('Nieuw bericht van '+from, { body: text, icon: img });
    if(type = true){
       notification.onclick = function(){
           window.open('https://www.geheimesite.nl/website/nindo/messages/message.php?id='+id, '_blank');
       };
    } else {
       notification.onclick = function(){
           window.open('https://www.geheimesite.nl/website/nindo/messenger.php?id='+id, '_blank');
       }; 
    }
  }

  else if (Notification.permission !== 'denied') {
    Notification.requestPermission(function (permission) {
      if(type = true){
           notification.onclick = function(){
               window.open('https://www.geheimesite.nl/website/nindo/messages/message.php?id='+id, '_blank');
           };
        } else {
           notification.onclick = function(){
               window.open('https://www.geheimesite.nl/website/nindo/messenger.php?id='+id, '_blank');
           }; 
        }
    });
  }
console.log("hallo");
}</script>
<?php
if($_SESSION["login19"] == true) { 
    function Notifications1(){ 
        include "../connection.php";
        $account_id = $_SESSION["id"]; 
        $sql = "SELECT * FROM private_messages";
        $messages = $conn->query($sql);
        while($row = $messages->fetch_object()) {
            if($row->to_id == $account_id) {
                if($row->opend == "0" && $row->notify == "0") {
                    echo "<script>var text = '$row->text';
                    var id = '$row->id';
                    var from = '$row->from_name: $row->subject';
                    var prive = true;
                    notifyMe(prive);</script>";
                    $sql = "UPDATE `private_messages` SET `notify` = '1' WHERE `private_messages`.`id` = $row->id;";
                    $updatemsg = $conn->query($sql);
                }
            } 
            else { 
                //echo "Je kan het bericht niet bekijken met dit account!";
            }
        }
    }function Notifications2(){ 
        include "../connection.php";
        $account_id = $_SESSION["id"]; 
        $sql = "SELECT * FROM messenger";
        $messages = $conn->query($sql);
        while($row = $messages->fetch_object()) {
            if($row->to_id == $account_id) {
                if($row->opend == "0") {
                    echo "<script>var text = '$row->text';
                    var id = '$row->from_id';
                    var from = '$row->from_name';
                    var prive = false;
                    notifyMe(prive);</script>";
                    $sql = "UPDATE `messenger` SET `opend` = '1' WHERE `messenger`.`id` = $row->id;";
                    $updatemsg = $conn->query($sql);
                }
            } 
            else { 
                //echo "Je kan het bericht niet bekijken met dit account!";
            }
        }
    }Notifications1();
    Notifications2();
}
?><script>
setInterval(function(){ location.reload(); }, 5000);
</script>