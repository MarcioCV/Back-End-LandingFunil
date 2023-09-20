<?php
    include_once("../connection/conn.php");
    session_start();

    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $link_royalq = $_POST['royalq'];
        $wp_group = $_POST['wp_group'];
        $profile = $_POST['profile'];
        $email = $_POST['email'];
        
        $result = mysqli_query($conn, "UPDATE usuario SET name = '$name', phone = '$phone', whatsapp_group = '$wp_group', link_royalQ = '$link_royalq', profile_pictures = '$profile' where email = '$email'");
        
        $_SESSION['name'] = $name;
        $_SESSION['phone'] = $phone;
        $_SESSION['whatsapp_group'] = $wp_group;
        $_SESSION['royalq'] = $link_royalq;
        $_SESSION['profile'] = $profile;    
    }

    header('Location: ../page/dados.php');
    die();
