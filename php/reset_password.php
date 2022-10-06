<?php
    include_once("../process/config.php");

 if(!isset($_GET["code"])){ // variavel de codigo 
    header('Location: ../html/login.php');
}

$code = $_GET["code"]; // Url - variavel de codigo wda url
echo $code;

$getEmailQuery = mysqli_query($con, "SELECT email FROM reset WHERE code ='$code'");
var_dump($getEmailQuery);
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

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href='../img/icon/logorenda.svg'>
        <link rel="stylesheet" href="../sass/css/dashbord.css">
        <link rel="stylesheet" href="../sass/css/dados.css">
        <link rel="stylesheet" href="../sass/mobile/responsive_600.css">
        <link rel="stylesheet" href="../sass/mobile/responsive_700.css">
        <link rel="stylesheet" href="../sass/mobile/responsive_800.css">
</head> -->
<body>
    
</body>
</html>
<form method="POST" action="">
    <input type="password" name="password" placeholder="New Password">
    <br>
    <input type="submit" name="submit" value="Update password">
</form>
<!-- 
<div class="cont_dados">
                <div class="container_dados">
                    <div class="input_all">
                        <form method="POST">
                            <h1 class="h-1">Alteraçao de senha</h1>
                            <span class="text-sub"> Só preencha em caso de troca.</span>
                            <p><label for="password">Senha</label>
                                <input class="form-control" type="password" name="password" required
                                    placeholder="  ****************">
                            <p><label for="password">Confirme a Senha</label>
                                <input class="form-control" type="password" name="password" required
                                    placeholder="  *******************">
                            </p>
                        </form>
                    </div>
                    <div class="button">
                        <p><button class="btn" type="submit">Salvar</button></p>
                    </div>
                </div> -->

<!-- <!DOCTYPE html>
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
        <div class="general">
            <div class="container">
                <div class="input_all">
                <form method="POST" action="" >
                        <h1 class="h-1">Bem-vindo(a)à Renda Infinita </h1>
                        <p class="paragraph">Você pode redefinir sua senha aqui</p>
                        <p><label for="email">E-mail</label></p>
                        <input class="form-control" type="email" name="email" required placeholder=" email@gmail.com">
                        </p>
                    </div>
                    </div>
                    <div class="button">
                        <button class="btn" type="submit" name="submit">Submit</a></button>
                        <input type="hidden" name="env" value="form">
                    </div>
                </form>
                <h5 class="h-5">Já tem cadastro?
                    <a href="../html/login.php"> Entrar </a>
                </h5>
        </div>
    </header>
    <script src="../js/script.js"></script>
</body>

</html> -->