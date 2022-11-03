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
    <link rel="stylesheet" href="../css/mobile/responsive_login_300.css">
    <link rel="stylesheet" href="../css/mobile/responsive_login_400.css">
    <link rel="stylesheet" href="../css/mobile/responsive_login_900.css">
    <link rel="icon" href='../img/icon/logorenda.svg'>
    <script src="../js/script.js"></script>
    
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
                    <form method="POST" action="../php/cadastro.php">
                        <h1 class="h-1">Bem-vindo(a)à Renda Infinita </h1>
                        <p><label for="name">Nome completo</label></p>
                        <input class="form-control" type="text" name="name" required placeholder=" Stephen Watson">
                        <p><label for="email">E-mail</label>
                            <input class="form-control" type="email" name="email" required
                                placeholder=" email@gmail.com">
                        <p><label for="phone">Celular e DDD (com WhastsApp)</label>
                            <input class="form-control" type="text" name="phone" required placeholder="+1 582-262-5952" maxlength="20" >
                        <p><label for="password">Senha</label>
                            <input class="form-control" type="password" id="password" name="password" required
                                placeholder=" *****************">
                        <p><label for="password">Repite Senha</label>
                            <input class="form-control" type="password" id="confirmation_password" name="confirmation_password" required
                                placeholder=" ******************">
                        </p>
                        <div class="check-box">
                            <input type="checkbox" name="" id="">
                            <span>Eu li e aceito os <label class="termos">Termos de uso</label></span>
                        </div>
                            <?php
                           if(isset($_GET["erro"])){
                            if($_GET["erro"] == 4){
                                echo '<p class="paragraph" style="color: red !important; display: flex;
                                justify-content: center;">Email já cadastrado ! Tente novamante!</p>';
                            }
                           }
                        ?>
                        <div class="button">
                            <button class="btn" type="submit" name="submit">Cadastro</button>
                            
                        </div>
                    </form>
                </div>
            </div>
            <h5 class="h-5">Já tem cadastro?
                <a href="../html/login.php"> Entrar </a>
            </h5>
        </div>
    </header>
    <script src="../js/password.js"></script>
</body>

</html>