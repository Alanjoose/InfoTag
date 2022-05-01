<?php
include '../database/migrations/sessioncontrol.php';
include '../database/migrations/functions.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfoTag - Descomplicando a informática</title>
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/animations.css">
    <link rel="stylesheet" href="./styles/home.css">
    <link rel="stylesheet"
    href="https://use.fontawesome.com/releases/v6.1.1/css/all.css"
    integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5"
    crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>
    <div class="container">

    <header class="header">

        <nav class="dados">
            <span id="clock"></span>
            <span><?=getUserPoints()?> Pontos</span>
            <i class="fa fa-solid fa-moon" id="moon"></i>
        </nav>

        <h1><?=getPresentation() . getUserName()?></h1>

        <section class="menu-slider">
        <ul>
            <li class="menu-item"><a href="#">
            <i class="fa fa-solid fa-user"></i>
            Conta
            </a></li>

            <li class="menu-item"><a href="#">
                <i class="fa fa-solid fa-gears"></i>
                Configurações Gerais
            </a></li>

            <li class="menu-item"><a href="#">
            <i class="fa fa-solid fa-brush"></i>
            Aparência
            </a></li>
            
            <li class="menu-item"><a href="#">
                <i class="fa fa-solid fa-bell-concierge"></i>
                Suporte
            </a></li>

            <li class="menu-item"><a href="../database/migrations/logout.php">
            <i class="fa fa-solid fa-arrow-right-from-bracket"></i>
            Sair
            </a></li>
        </ul>
    </section>
        <nav class="menu-trigger">
        <i class="fa fa-solid fa-bars" id="bars"></i>
        </nav>
    </header>

    <main class="wrapper">

            <div class="card">
            <i class="fa fa-solid fa-microchip card-icon"></i>
            <h3 class="card-title">Hardware</h3>
            <div class="card-links">
                <a href="#" class="teory">Teoria</a>
                <a href="#" class="test">Teste</a>
            </div>
        </div>

        <div class="card">
        <i class="fa fa-solid fa-cube card-icon"></i>
        <h3 class="card-title">Software</h3>
        <div class="card-links">
            <a href="#" class="teory">Teoria</a>
            <a href="#" class="test">Teste</a>
        </div>
        </div>

        <div class="card">
        <i class="fa fa-brands fa-centos card-icon"></i>
        <h3 class="card-title">Sistemas<br> Operacionais</h3>
        <div class="card-links">
            <a href="#" class="teory">Teoria</a>
            <a href="#" class="test">Teste</a>
        </div>
        </div>

        <div class="card">
        <i class="fa fa-brands fa-windows card-icon"></i>
        <h3 class="card-title">Windows</h3>
        <div class="card-links">
            <a href="#" class="teory">Teoria</a>
            <a href="#" class="test">Teste</a>
        </div>
        </div>

        <div class="card">
        <i class="fa fa-brands fa-linux card-icon"></i>
        <h3 class="card-title">Linux</h3>
        <div class="card-links">
            <a href="#" class="teory">Teoria</a>
            <a href="#" class="test">Teste</a>
        </div>
        </div>

        <div class="card">
        <i class="fa fa-solid fa-code-branch card-icon"></i>
        <h3 class="card-title">Lógica de<br> Programação</h3>
        <div class="card-links">
            <a href="#" class="teory">Teoria</a>
            <a href="#" class="test">Teste</a>
        </div>
        </div>

        <div class="card">
        <i class="fa fa-brands fa-java card-icon"></i>
        <h3 class="card-title">Linguagens de<br> Programação</h3>
        <div class="card-links">
            <a href="#" class="teory">Teoria</a>
            <a href="#" class="test">Teste</a>
        </div>
        </div>

        <div class="card">
        <i class="fa fa-solid fa-bolt card-icon"></i>
        <h3 class="card-title">Super Teste</h3>
        <div class="card-links">
            <a href="#" class="teory">Teoria</a>
            <a href="#" class="test">Teste</a>
        </div>
        </div>
    </main>
    </div>
    <script type="text/javascript" src="./scripts/jquery-3.6.0.min.js"></script>
    <script src="./scripts/index.js"></script>
</body>
</html>