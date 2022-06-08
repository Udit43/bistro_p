<?php

    $my_email = "agrawal.udit43@gmail.com";
    $my_password = "iwillnottell";

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['pwd'];
        if($username == $my_email and $password == $my_password){
            if(isset($_POST['rememberme'])){
                setcookie('username' , $username, time()+60*60*7);
            }
            session_start();
            $_SESSION['username'] = $username;
            header("location: welcome.php");
        }else{
            echo "<a href='premium.html'>try again </a>";
        }
    }else{
        header("location: premium.html");
    }
?>