<?php
session_start();
include '../database/session.php';
include '../database/process/dates.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfoTag - Descomplicando a informática</title>
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/home.css">
    <link rel="stylesheet"
    href="https://use.fontawesome.com/releases/v6.1.1/css/all.css"
    integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5"
    crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="./styles/animations.css">
</head>
<body>

    <div class="container">
    <header>
        <div class="grid-line">
            <span id="hour"><?=$date?></span>
            <span><?=$_SESSION['pontos']?></span>
            <i class="fa fa-solid fa-moon" id="dark"></i>
        </div>
        <h2><?=getPresentation() . $_SESSION['nome']?></h2>
    </header>
    <nav class="nav-menu">
        <div class="menu-content">
            <ul>
                <li><a href="#" class="menu-link"><b>Conta</b></a></li>
                <li><a href="#" class="menu-link"><b>Aparência</b></a></li>
                <li><a href="#" class="menu-link"><b>Estatisticas</b></a></li>
                <li><a href="#" class="menu-link"><b>Mensagens+</b></a></li>
                <li><a href="#" class="menu-link"><b>Configurações</b></a></li>
                <li><a href="../database/crud/logout.php" class="menu-link"><b>Sair</b></a></li>
            </ul>
        </div>
    <i class="fa fa-solid fa-bars" id="bars"></i>
    </nav>

    <main id="top">
        <nav class="fluid-line">
        <h3>Tópicos</h3>
        </nav>

        <div class="wrapper">

            <div class="card">
            <i class="fa fa-solid fa-microchip card-icon"></i>
            <b>Hardware</b>
            <a href="#" class="card-link teory"><b>Teoria</b></a>
            <a href="#" class="card-link test"><b>Teste</b></a>
            </div>

            <div class="card">
            <i class="fa fa-solid fa-cube card-icon"></i>
            <b>Software</b>
            <a href="#" class="card-link teory"><b>Teoria</b></a>
            <a href="#" class="card-link test"><b>Teste</b></a>
            </div>

            <div class="card">
            <i class="fa-brands fa-centos card-icon"></i>
            <b>Sistemas<br> operacionais</b>
            <a href="#" class="card-link teory"><b>Teoria</b></a>
            <a href="#" class="card-link test"><b>Teste</b></a>
            </div>

            <div class="card">
            <i class="fa-solid fa-robot card-icon"></i>
            <b>Algorítmos</b>
            <a href="#" class="card-link teory"><b>Teoria</b></a>
            <a href="#" class="card-link test"><b>Teste</b></a>
            </div>

            <div class="card">
            <i class="fa fa-brands fa-linux card-icon"></i>
            <b>Linux</b>
            <a href="#" class="card-link teory"><b>Teoria</b></a>
            <a href="#" class="card-link test"><b>Teste</b></a>
            </div>

            <div class="card">
            <i class="fa fa-brands fa-windows card-icon"></i>
            <b>Windows</b>
            <a href="#" class="card-link teory"><b>Teoria</b></a>
            <a href="#" class="card-link test"><b>Teste</b></a>
            </div>

            <div class="card">
            <i class="fa fa-solid fa-code card-icon"></i>
            <b>Linguagens de<br> programação</b>
            <a href="#" class="card-link teory"><b>Teoria</b></a>
            <a href="#" class="card-link test"><b>Teste</b></a>
            </div>

            <div class="card">
            <i class="fa fa-solid fa-network-wired card-icon"></i>
            <b>Redes de computadores</b>
            <a href="#" class="card-link teory"><b>Teoria</b></a>
            <a href="#" class="card-link test"><b>Teste</b></a>
            </div>
        </div>

        <nav class="fluid-line">
        <h3>Tutoriais</h3>
        </nav>

        <div class="wrapper-fluid">

        </div>
        
    </main>

    <footer>
    <i class="fa fa-solid fa-house footer-icon" id="home"></i>
    <i class="fa fa-solid fa-user footer-icon"></i>
    <i class="fa fa-solid fa-medal footer-icon"></i>
    </footer>
    </div>

    <script type="text/javascript" src="./scripts/jquery-3.6.0.min.js"></script>
    <script src="./scripts/interfaces.js"></script>
</body>
</html>