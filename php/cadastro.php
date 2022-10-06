<?php

include_once("../process/conn.php");

    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $password_crypt = md5($password);
        $result = mysqli_query($conn, "INSERT INTO user(name,email,phone,password) VALUES ('$name','$email','$phone','$password_crypt')");
        
    }

    header('Location: ../html/login.php');
    die();
?>