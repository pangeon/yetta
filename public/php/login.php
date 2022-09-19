<?php

require_once("auth_data.php");
session_start();

if(!empty($_POST['login-email']) && !empty($_POST['login-password'])) {
    if($_POST['login-email'] == EMAIL) {
        if(password_verify($_POST['login-password'], PASSWORD)) {
            $_SESSION['user'] = htmlspecialchars($_POST['login-email']);
            
        }
    }
}
header("Location: http://localhost:8000/");