<?php
    session_start();
    // print_r($_SESSION);
        if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['password']) == true))
        {   
            unset($_SESSION['email']);
            unset($_SESSION['password']);
            header('Location: ../html/login.php');
        }
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
        <link rel="stylesheet" href="../sass/css/dados.css">
        <link rel="stylesheet" href="../sass/mobile/responsive_600.css">
        <link rel="stylesheet" href="../sass/mobile/responsive_700.css">
        <link rel="stylesheet" href="../sass/mobile/responsive_800.css">
        <title>Meus Dados</title>
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
                <div class="logoName"><?=$_SESSION['email']?></div>
            </div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
    
        <ul class="nav_list">

            <li>
                <a href="../page/back_office.html">
                    <i class='bx bx-grid-alt' ></i>
                    <span class="links_name">Inicio</span>
                    <span class="toolipe">Inicio</span>
                </a>
            </li>

            

            <li>
                <a href="../page/dados.html">
                    <i class='bx bx-user' ></i>
                    <span class="links_name">Meus Dados</span>
                    <span class="toolipe">Meus Dados</span>
                </a>
            </li>
        </ul>
        <div class="profileContent">
            <div class="profile">
                <a class="logout_" href="../php/sair.php">
                    <i class='bx bx-log-out' id="logout">

                    </i>
                </a>
            </div>
        </div>
    </div>
    <div class="homeContent">
        <h2 class="h-2">Meus Dados |</h2>
        <div class="cont">
            <div class="container_">
                <div class="input_all">
                    <form method="POST" action="../php/atualizar_dados.php">
                        <p><label for="name">Nome completo</label></p>
                        <input class="form-control" type="name" name="name" required placeholder=" Fulano de Tal" value="<?=$_SESSION['name']?>">
                        <p><label for="email">E-mail</label>
                            <input class="form-control" type="email" name="email" required
                                placeholder=" fulanodetal@outlook.com" value="<?=$_SESSION["email"]?>">
                        <p><label for="phone">WhastApp</label>
                            <input class="form-control" type="tel" name="phone" required placeholder=" (41)70707070" value="<?=$_SESSION["phone"]?>">
                        <p><label for="text">Link RoyalQ</label>
                            <input class="form-control" type="text" name="royalq" required
                                placeholder=" www.royalq.com/fulanodetal" value="<?php if(isset($_SESSION["royalq"])){echo $_SESSION["royalq"];}else{echo "Cole aqui seu link RoyalQ";}?>">
                        <p><label for="text">Link Binance</label>
                            <input class="form-control" type="text" name="binance" required
                                placeholder=" www.binance.com/fulanodetal" value="<?php if(isset($_SESSION["binance"])){echo $_SESSION["binance"];}else{echo "Cole aqui seu link Binance";}?>">
                        </p>
                        <p><label for="text">Link grupo Telegram</label>
                            <input class="form-control" type="text" name="telegram" required
                                placeholder=" Telegram.fulanodetal.contato" value="<?php if(isset($_SESSION["telegram"])){echo $_SESSION["telegram"];}else{echo "Cole aqui seu link Telegram";}?>">
                        </p>
                        <p><label for="text">Link grupo WhatsApp</label>
                            <input class="form-control" type="text" name="wp_group" required
                                placeholder="https://chat.whatsapp.com/iddWdawiDNdw" value="<?php if(isset($_SESSION["whatsapp_group"])){echo $_SESSION["whatsapp_group"];}else{echo "Cole aqui seu link WhatsApp";}?>">
                        </p>
                        <div class="button">
                            <p><button class="btn" type="submit" name="submit">Salvar</button></p>
                        </div>
                    </form>
                </div>
            </div>
           
                <div class="container_profil">
                    <div class="input_all">
                        <form method="POST">
                            <h3 class="h-3">Foto de Perfil</h3>
                          <input type="file" name="arquivo" id="arquivo">
                            <h4 class="h-4">Remover foto</h4>
                            <div class="Photograph">
                                <img src="../img/blank-profile-picture-973460_1280.webp" class="profil_Photograph">
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    
    <script src="../js/script.js"></script>
</body>
</html>