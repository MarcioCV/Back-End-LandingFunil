<?php
    include_once("../connection/config.php");

 if(!isset($_GET["code"])){ // variavel de codigo 
    header('Location: ../html/login.php');
}

$code = $_GET["code"]; // Url - variavel de codigo da url
// echo $code;

$getEmailQuery = mysqli_query($con, "SELECT email FROM reset WHERE code ='$code'");
// var_dump($getEmailQuery);
if(mysqli_num_rows($getEmailQuery)== 0){ // linha econtradas  
    exit("Can't find page");
}

if(isset($_POST["password"])){
    $passw =  $_POST["password"];
    $passw = md5($passw);

    $row = mysqli_fetch_array($getEmailQuery);
    $email = $row["email"];

    $query = mysqli_query($con, "UPDATE user SET password='$passw' WHERE email ='$email'");

    if($query){
        $query = mysqli_query($con, "DELETE FROM reset WHERE code = '$code' ");
        header('Location: ../html/login.php');
    }
    else{
        header('Location: ../html/login.php?erro=2');
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <title>Registro</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/mobile/responsive_300.css">
    <link rel="stylesheet" href="../css/mobile/responsive_400.css">
    <link rel="stylesheet" href="../css/mobile/responsive_900.css">
    <link rel="icon" href='../img/icon/logorenda.svg'>
</head>

<body>
    <header id="header">
        <div class="mynavbar">
            <div class="nav-items">
                <img src="../img/rendainfinitanovalogo.svg" id="logo">
                <nav id="nav">
                    <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu"
                        aria-expanded="false">
                        <span id="hamburger"></span>
                    </button>
                    <ul id="menu" role="menu">
                        <li class="li_nav"><a href="#home" class="a_nav">HOME</a></li>
                        <li class="li_nav"><a href="#robo" class="a_nav">VANTAGENS</a></li>
                        <li class="li_nav"><a href="#depoimentos" class="a_nav">DEPOIMENTOS</a></li>
                        <li class="li_nav"><a href="#faq" class="a_nav">FAQ</a></li>
                        <li class="li_nav"><a href="#tutoriais" class="a_nav">TUTORIAIS</a></li>
                        <li class="li_nav"><a href="#contatos" class="a_nav">CONTATOS</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        </nav>
    </header> 
    <div class="general">
        <div class="container">
            <div class="input_all">
                <form method="POST" action="">
                    <h1 class="main"  style="color: #fff;font-weight: 100; align-items: center;">Alteraçao de senha</h1>
                    <span class="text-sub">Senha</span>
                    <input class="form-control" id="password" type="password" name="password" required placeholder="****************">
                    <span>Confirme a Senha</span>
                    <input class="form-control" type="password" id="confirmation_password" name="senha_confirma" required placeholder="****************">
                    <div class="button">
                        <input class="btn" type="submit" name="submit" value=" Update password ">
                    </div>
                </form>
            </div>
        </div>
    </div>
 <script src="../js/password.js"></script>
</body>

</html>