<?php
    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    unset($_SESSION['name']);
    unset($_SESSION['phone']);
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    unset($_SESSION['profile_pictures']);
    unset($_SESSION['whatsapp_group']);
    unset($_SESSION['royalq']);
    setcookie('user_login', null, -1, '/');
    setcookie('user_password', null, -1, '/');
    header('Location: ../html/login.php');
    
?>