<?php
session_start();

function redirect($url) {
    header('Location: '.$url);
    die();
}

if(!empty($_POST['login-email']) && !empty($_POST['login-password'])) {
    redirect('http://127.0.0.1:8000/wpisy');
}