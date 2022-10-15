<?php
    include_once("../connection/conn.php");
    session_start();

    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $link_royalq = $_POST['royalq'];
        $binance = $_POST['binance'];
        $wp_group = $_POST['wp_group'];
        $tg_group = $_POST['telegram'];
        $profile = $_POST['profile'];

        $result = mysqli_query($conn, "UPDATE user SET name = '$name', phone = '$phone', whatsapp_group = '$wp_group', telegram = '$tg_group', link_royalQ = '$link_royalq', binance = '$binance', profile_pictures = '$profile'");
        
        $_SESSION['name'] = $name;
        $_SESSION['phone'] = $phone;
        $_SESSION['whatsapp_group'] = $wp_group;
        $_SESSION['telegram'] = $tg_group;
        $_SESSION['binance'] = $binance;
        $_SESSION['royalq'] = $link_royalq;
        $_SESSION['profile'] = $profile;    
    }

    header('Location: ../page/dados.php');
    die();
?>