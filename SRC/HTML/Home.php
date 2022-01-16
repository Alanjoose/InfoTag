<?php
ini_set('session.gc_maxlifetime', 900);
ini_set('session.gc_probability', 1);
ini_set('session.gc_divisor', 1);
session_start();
if(!isset($_SESSION['Login']) || $_SESSION['Login'] !== true) {
    header('location: ../HTML/index.html');
    exit();
}
include('../BACKEND/Dates.php');
include('../BACKEND/Presentation.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../CSS/Home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" type="imagen/png" href="../IMG/Itag.png">
    <script src="../SCRIPT/Configs.js"></script>
    <script src="../SCRIPT/Home.js"></script>
</head>
<body>
    <main>
        <header class="header">
            <div id="circle"></div>
            <h1 id="title">{<\InfoTag/>}</h1>
            <nav class="configs">
                <select name="configs" id="cfg" onchange="location = this.value;">
                    <option selected disabled hidden>Configurações da conta</option>
                    <option value="./Configs.html">Configurações Gerais</option>
                    <option value="../BACKEND/Logout.php">Sair</option>
                </select>
                <a href="../BACKEND/Nav.php"><button id="back">Voltar</button></a>
            </nav>
        </header>
        <div class="present"><h3><?=$Presentation . " " . $_SESSION['Nome']?></h3></div> <!--Depende do sexo do usuário-->
        <div class="present"><h3>Sua pontuação geral é de: <?=$_SESSION['Pont_Geral']?></h3></div> 
        <div class="date"><h3><?=$Now?></h3></div> <!--Pega a hora atual e compara com o turno-->
        <nav class="mid"><span>Cursos</span></nav>
        <!--Começa os conteúdos-->
        <section class="painel" id="hardware">
            <abbr title="Hardware"><img class="icon" src="../IMG/Hardware.png" alt="Hardware"></abbr> <label for="hardware">Hardware</label>
            <details>
                <summary>Descrição</summary>
                <p>
                Todo bom profissional de TI deve conhecer bem o seu equipamento,
                por isso que não é incomum que sua jornada comece pelo hardware, que se resume à parte física dos computadores e eletônicos. ;)
                </p>
            </details>
            <a href="TeoryHD.html"><button class="teory"><abbr title="Teoria"><img src="../IMG/btns/lesson.jpg" alt="Teoria"></abbr></button></a>
            <a href="QuizHD.html"><button class="test"><abbr title="Teste Prático"><img src="../IMG/btns/hardwaretest.png" alt="Testes"></abbr></button></a>
        </section>
        <!--Outro Painel-->
        <section class="painel" id="software">
            <abbr title="Software"><img class="icon" src="../IMG/software.png" alt="Software"></abbr> <label for="software">Software</label>
            <details>
                <summary>Descrição</summary>
                <p>
                Chegou a hora de aprender como funcionam todos os programas que fazem o processo das atividades de um computador.
                </p>
            </details>
            <a href="#"><button class="teory"><abbr title="Teoria"><img src="../IMG/btns/lesson.jpg" alt="Teoria"></abbr></button></a>
            <a href="#"><button class="test"><abbr title="Teste Prático"><img src="../IMG/btns/hardwaretest.png" alt="Testes"></abbr></button></a>
        </section>
        <!--Outro Painel-->
        <section class="painel" id="logica">
            <abbr title="lógica de Processamento"><img class="icon" src="../IMG/processlogic.png" alt="lógica de processamento"></abbr> <label for="logica">Lógica de Processamento</label>
            <details>
                <summary>Descrição</summary>
                <p>
                Chegou a hora de aprender como funcionam todos os programas que fazem o processo das atividades de um computador.
                </p>
            </details>
            <a href="#"><button class="teory"><abbr title="Teoria"><img src="../IMG/btns/lesson.jpg" alt="Teoria"></abbr></button></a>
            <a href="#"><button class="test"><abbr title="Teste Prático"><img src="../IMG/btns/hardwaretest.png" alt="Testes"></abbr></button></a>
        </section>
         <!--Outro Painel-->
         <section class="painel" id="logica">
            <abbr title="Sistemas Operacionais"><img class="icon" src="../IMG/operationalS.png" alt="Sistemas Operacionais"></abbr> <label for="logica">Sistemas Operacionais</label>
            <details>
                <summary>Descrição</summary>
                <p>
                Um dos itens necessários para o funcionameto de um computador é um sistema operacional. Entenda os conceitos, funções e diferenças sobre cada um.
                </p>
            </details>
            <a href="#"><button class="teory"><abbr title="Teoria"><img src="../IMG/btns/lesson.jpg" alt="Teoria"></abbr></button></a>
            <a href="#"><button class="test"><abbr title="Teste Prático"><img src="../IMG/btns/hardwaretest.png" alt="Testes"></abbr></button></a>
        </section>
        <!--Outro Painel-->
        <section class="painel" id="memorias">
            <abbr title="Memórias"><img class="icon" src="../IMG/memory.png" alt="Memórias"></abbr> <label for="memorias">Memórias</label>
            <details>
                <summary>Descrição</summary>
                <p>
                Entenda o funcionamento do componente que permite a execução de programas múltiplos no computador.
                </p>
            </details>
            <a href="#"><button class="teory"><abbr title="Teoria"><img src="../IMG/btns/lesson.jpg" alt="Teoria"></abbr></button></a>
            <a href="#"><button class="test"><abbr title="Teste Prático"><img src="../IMG/btns/hardwaretest.png" alt="Testes"></abbr></button></a>
        </section>
        <!--Outro Painel-->
        <section class="painel" id="tabelas">
            <abbr title="Tabelas"><img class="icon" src="../IMG/tables.jpg" alt="Tabelas"></abbr> <label for="tabelas">Tabelas e Índices</label>
            <details>
                <summary>Descrição</summary>
                <p>
                Tabelas e Índices fazem parte do conceito necessário para entender o funcionamento da alocação de memória e recursos do sistema.
                </p>
            </details>
            <a href="#"><button class="teory"><abbr title="Teoria"><abbr title="Teoria"><img src="../IMG/btns/lesson.jpg" alt="Teoria"></abbr></button></a>
            <a href="#"><button class="test"><abbr title="Teste Prático"><img src="../IMG/btns/hardwaretest.png" alt="Testes"></abbr></button></a>
        </section>
        <!--Outro Painel-->
        <section class="painel" id="linguagens">
            <abbr title="Linguagens de Programação"><img class="icon" src="../IMG/prg.png" alt="linguagens de Programação" id="lang"></abbr> <label for="linguagens">Linguagens de Programação</label>
            <details>
                <summary>Descrição</summary>
                <p>
                Aprenda como são construidos os programas de computador, e como são definidos os comportamentos dos mesmos.
                </p>
            </details>
            <a href="#"><button class="teory"><abbr title="Teoria"><img src="../IMG/btns/lesson.jpg" alt="Teoria"></abbr></button></a>
            <a href="#"><button class="test"><abbr title="Teste Prático"><img src="../IMG/btns/hardwaretest.png" alt="Testes"></abbr></button></a>
        </section>
        <!--Outro Painel-->
        <section class="painel" id="introducao">
            <abbr title="Programação"><img class="icon" src="../IMG/Linux-Shell.png" alt="Introdução à Programção Simples"></abbr> <label for="introducao">Introdução à Programação Simples</label>
            <details>
                <summary>Descrição</summary>
                <p>
                Dê seus primeiros passos neste vasto mundo da programação e construa seus primeiros programas.
                </p>
            </details>
            <a href="#"><button class="teory"><abbr title="Teoria"><img src="../IMG/btns/lesson.jpg" alt="Teoria"></abbr></button></a>
            <a href="#"><button class="test"><abbr title="Teste Prático"><img src="../IMG/btns/hardwaretest.png" alt="Testes"></abbr></button></a>
        </section>
        <nav class="configs_infe"><button id="btop" onclick="Back_Top()">Voltar ao Topo</button></nav>
</main>
</body>
</html>