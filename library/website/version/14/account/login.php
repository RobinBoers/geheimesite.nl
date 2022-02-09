<?php
session_start();
    if(isset($_POST['login'])) {
        include("../connection.php");
        
        $username = strip_tags($_POST['username']);
        $password = strip_tags($_POST['password']);
        
        $username = $conn->real_escape_string($username);
        $password= $conn->real_escape_string($password);
                
        $sql = "SELECT * FROM userinfo WHERE username = '$username'";
        
        $result = $conn->query($sql);
        
        if($result->num_rows == 1) {
            while($row = $result->fetch_object()) {

                if(password_verify($password, $row->password)) {
                    $_SESSION['id'] = $row->id;
                    $_SESSION['username'] = $row->username;
                    $_SESSION['nickname'] = $row->nickname;
                    $_SESSION['email'] = $row->email;
                    $_SESSION['permissions'] = $row->permissions;
                    $_SESSION['login19'] = true;

                    // Remove token from account
                    if($row->token !== "") {
                        $conn->query("UPDATE userinfo SET token='' WHERE id = '$row->id'");
                    }

                    // Naar accountbeheer
                    header('Location: index.php');
                } else {
                    header('location: inloggen.php?wrong');
                }                                
                
            }
        } else {
                header('location: inloggen.php?wrong');
        }
    } 
?>