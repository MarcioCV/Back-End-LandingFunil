<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password']))
    {
            // Acessar
        include_once("../process/conn.php");
        $email = $_POST['email'];
        $password = $_POST['password'];

        // print_r($email);
        // print_r($password);


        $sql = "SELECT * FROM user WHERE email = '$email' and password = '$password'";

        $result = $conn->query($sql);
        
        // print_r($sql);
        // print_r($result);

        if(mysqli_num_rows($result)< 1)
        {    
            unset($_SESSION['email']);
            unset($_SESSION['password']);
            header('Location: ../html/login.php');
        }
        else
        {
            $row = $result -> fetch_row();
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            $_SESSION['name'] = $row[1];
            $_SESSION['phone'] = $row[2];
            $_SESSION['profile_pictures'] = $row[5];
            $_SESSION['whatsapp_group'] = $row[6];
            $_SESSION['telegram'] = $row[7];
            $_SESSION['royalq'] =  $row[8];
            $_SESSION['binance'] = $row[9];
            
            header("Location:../page/system.php");
        }
    }else{
        // Nao acessa
        header('Location: ../html/login.php');
    }
?>