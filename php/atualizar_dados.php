<?php
    include_once("../connection/conn.php");
    session_start();

    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $link_royalq = $_POST['royalq'];
        $binance = $_POST['binance'];
        $wp_group = $_POST['wp_group'];
        $tg_group = $_POST['telegram'];

        $result = mysqli_query($conn, "UPDATE user SET name = '$name', email = '$email', phone = '$phone', whatsapp_group = '$wp_group', telegrama_group = '$tg_group', link_royalQ = '$link_royalq', binance_link = '$binance'");
        
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $name;
        $_SESSION['phone'] = $phone;
        $_SESSION['whatsapp_group'] = $wp_group;
        $_SESSION['telegram'] = $tg_group;
        $_SESSION['binance'] = $binance;
        $_SESSION['royalq'] = $link_royalq;
    }

    header('Location: ../page/dados.php');
    die();
?>