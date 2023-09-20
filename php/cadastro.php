<?php

include_once("../connection/conn.php");

    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $password_crypt = md5($password);
        $result = mysqli_query($conn, "SELECT id FROM usuario WHERE email = '$email'");
        if(mysqli_num_rows($result)< 1){
            $result = mysqli_query($conn, "INSERT INTO usuario(name,email,phone,password) VALUES ('$name','$email','$phone','$password_crypt')");
            header('Location:../html/login.php');
        }
        else{
            header('Location: ../html/registro.php?erro=4');
        }
        
    }else{
        header('Location:../html/login.php');
    }
    die();


