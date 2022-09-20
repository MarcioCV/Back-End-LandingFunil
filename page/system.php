<?php
    session_start();
    // print_r($_SESSION);
        if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['password']) == true))
        {
            unset($_SESSION['email']);
            unset($_SESSION['password']);
            header('Location: ../html/login.php');
        }
        $logado = $_SESSION['email'];
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <link rel="icon" href='../img/icon/logorenda.svg'>
        <link rel="stylesheet" href="../sass/css/dashbord.css">
        <link rel="stylesheet" href="../sass/mobile/responsive_600.css">
        <link rel="stylesheet" href="../sass/mobile/responsive_700.css">
        <link rel="stylesheet" href="../sass/mobile/responsive_800.css">
        <title>Inicio</title>
    </head>
</head>

<body>
    <div class="general">
        <div class="mynavbar">
            <header id="header">
                <img src="../img/rendainfinitanovalogo.svg" id="logo">
                <nav id="nav">
                    <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu"
                        aria-expanded="false">
                        <span id="hamburger"></span>
                    </button>
                    <ul id="menu" role="menu">
                        <li><a href="../page/back_office.html">Inicio</a></li>
                        <li><a href="../page/dados.html">Meus Dados</a></li>
                    </ul>
                </nav>
        </div>
        </header>

    </div>
    <div class="sidebar">
        <div class="logoContent">
            <div class="logo">
                <div class="logoName"><?=$logado?></div> 
            </div>

            <i class='bx bx-menu' id="btn"></i>
        </div>

        <ul class="nav_list">

            <li>
                <a href="#">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Inicio</span>
                    <span class="toolipe">Inicio</span>
                </a>
            </li>



            <li>
                <a href="../page/dados.html">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Meus Dados</span>
                    <span class="toolipe">Meus Dados</span>
                </a>
            </li>
        </ul>
        <div class="profileContent">
            <div class="profile">
                <a class="logout_" href="../html/login.html">
                    <i class='bx bx-log-out' id="logout">

                    </i>
                </a>



            </div>
        </div>
    </div>
    <div class="homeContent">
        <h2 class="h-2">Dashboard |</h2>
        <div class="cont">

            <span class="main">Seja Bem-Vindo a Renda Infinita</span>
            <div class="container">
                <div class="main-text">
                    Seu link de verificação é:
                </div>
                <a class="links" href="#">Https://rendainfinita.com/fulano <br>detal</a>
            </div>
        </div>
    </div>
    </div>
    <script src="../js/script.js"></script>
</body>

</html>