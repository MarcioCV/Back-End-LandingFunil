<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
require '../connection/config.php';

if(isset($_POST ["email"])){

    $emailTo = $_POST["email"];
    
    $code = uniqid(true); // id exclusivo
    $query = mysqli_query($con, "INSERT INTO reset(code,email) VALUES('$code','$emailTo')");
    if(!$query) {
        exit("error");
    }

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();                                            
        $mail->Host       = 'smtp.gmail.com';                    
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'infinitarendasuporte@gmail.com';                   
        $mail->Password   = 'vfmvrgcvybwcbbpa';                               
        $mail->SMTPSecure = 'smtp';            
        $mail->Port       = 587;                                   
    
       
        $mail->setFrom('suporte@infinitarenda.com.br', 'RendaInfinita');
        $mail->addAddress("$emailTo");     //Add a recipient
        $mail->addReplyTo('no-reply@gmail.com', 'No reply');
        
    
        $url = "http://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/reset_password.php?code=$code";
        $mail->isHTML(true);                                 
        $mail->Subject = 'Infinita Renda Troca de senha';
        $mail->Body    = "<h1 style='background: rgba(209,0,106,1);'> Clique no link abaixo para cadastrar sua senha </h1>
        Clique <a href='$url'> aqui </a> para trocar ";

        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        header('Location: ../html/login.php?erro=3');
    }catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    exit(); // Sem a possibilidade de solicitar outra solicitacao de  reset password
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
        <div class="general">
            <div class="container">
                <div class="input_all">
                <form method="POST" action="" >
                        <h1 class="h-1">Bem-vindo(a)à Renda Infinita </h1>
                        <p class="paragraph">Você pode redefinir sua senha aqui</p>
                        <p><label for="email">E-mail</label></p>
                        <input class="form-control" type="email" name="email" required placeholder=" email@gmail.com" autocomplete="off">
                        </p>
                    </div>
                    </div>
                    <div class="button">
                        <button class="btn" type="submit" name="submit">Submit</a></button>
                    </div>
                </form>
                <h5 class="h-5">Já tem cadastro?
                    <a href="../html/login.php"> Entrar </a>
                </h5>
              
        </div>
    </header>
    <script src="../js/script.js"></script>
</body>

</html>