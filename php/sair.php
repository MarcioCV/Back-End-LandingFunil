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
    unset($_SESSION['telegram']);
    unset($_SESSION['binance']);
    unset($_SESSION['royalq']);
    header('Location: ../html/login.php');
    
?>