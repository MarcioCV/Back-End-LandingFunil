<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/mobile/responsive_login_300.css">
    <link rel="stylesheet" href="../css/mobile/responsive_login_400.css">
    <link rel="stylesheet" href="../css/mobile/responsive_login_900.css">
    <link rel="stylesheet" href="../css/mobile/responsive_login_700.css">
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
                    <form method="POST" action="../php/efetuar_login.php">
                        <h1 class="h-1">Bem-vindo(a)à Renda Infinita </h1>
                        <p class="paragraph">Insira seu e-mail e senha ou cadastre-se para entrar</p>
                        <p><label for="email">E-mail</label></p>
                        <input class="form-control" type="email" name="email" required placeholder=" email@gmail.com">
                        <p><label for="password">Senha</label>
                        <input class="form-control" type="password" name="password" required placeholder=" ************">
                        </p>
                        <?php
                            if(isset($_GET["erro"])){
                                if($_GET["erro"] == 1){
                                    echo '<p class="paragraph" style="color: red !important;">email ou senha incorretos, tente novamente!</p>';
                                }
                                if($_GET["erro"] == 2){
                                    echo '<p class="paragraph" style="color: red !important;">Troca de senha falhou, tente novamente!</p>';
                                }
                                if($_GET["erro"] == 3){
                                    echo '<p class="paragraph" style="color: green !important;">Email enviado com sucesso!</p>';
                                }
                            }
                        ?>
                        <div class="check-box">
                            <input type="checkbox" name="" id="">
                            <span>Mantenha-me conectado </span>
                        </div>
                        <div class="button">
                            <p><button class="btn" type="submit" name="submit">Entrar</button></p>
                        </div>
                    </form>
                </div>
            </div>
            <h5 class="h-5"><a href="../php/requestReset.php">Esqueci minha senha</a></h5>
            <h5 class="h-5">Ainda não tem cadastro ? <a href="../html/registro.php"> Cadastro </a></h5>
        </div>
    </header>
    <script src="../js/script.js"></script>
</body>

</html>