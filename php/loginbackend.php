<?php
session_start();

$userinfo = array(
                'admin'=>'admin'
                );

                
if(isset($_POST['username'])) {
    if($userinfo[$_POST['username']] !== $_POST['password']) {
        header("Location: ../login.php");
    }
    else if($userinfo[$_POST['username']] == $_POST['password']) {
        header("Location: ../admin.php");

    }
}

if(isset($_GET['logout'])) {
    
    Session_destroy();
    header('Location: ./login.php');
}





?>