<?php
/*
@Author: Alan José;
@Date: 14/jan/2022;
@Desc: Aqui são manipuladas todas as datas e funções que as usam;
*/

session_start();
if(!isset($_SESSION['Login']) || $_SESSION['Login'] !== true) {
    header('location: ../HTML/Loginpage.php');
    exit();
}
//Recebe os dados do formulário ->
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4= $_POST['q4'];
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
$q7 = $_POST['q7'];
$q8 = $_POST['q8'];
$q9 = $_POST['q9'];
$q10 = $_POST['q10'];
$Hardware = 0;
if($q1 == "a" || $q1 == "A") {$Hardware++;}
if($q2 == "c" || $q1 == "C") {$Hardware++;}
if($q3 == "b" || $q1 == "B") {$Hardware++;}
if($q4 == "d" || $q1 == "D") {$Hardware++;}
if($q5 == "ac" || $q1 == "AC") {$Hardware++;}
if($q6 == "ffvv" || $q1 == "FFVV") {$Hardware++;}
if($q7 == "c" || $q1 == "C") {$Hardware++;}
if($q8 == "d" || $q1 == "D") {$Hardware++;}
if($q9 == "b" || $q1 == "B") {$Hardware++;}
if($q10 == "c" || $q1 == "C") {$Hardware++;}
$General = 0;
$General+=$Hardware;
$msg = '';
if($Hardware <= 4) {
    $msg = "Não foi dessa vez, mas não desista e estude mais. Vamos pra cima!";
    $situation = "&#128578;";
}
else if($Hardware >= 5 && $Hardware <= 8) {
    $msg = "Uau! Você acertou quase todas as questões, reforce mais um pouco e alcançará a máxima.";
    $situation = "&#128526;";
}
else if($Hardware == 10) {
    $msg = "Excelente! Você acertou todas as questões, Parabéns!";
    $situation = "&#129304;";
}
if($_SESSION['Pont_Geral'] == 10) {
    ;
}
else {
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=Itag", "alan", "senha");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $statement = $pdo->prepare("update User set Pont_Geral = :p where Id = :id");
        $statement->bindValue(":p", $General);
        $statement->bindValue("id", $_SESSION['Id']);
        $statement->execute();
    } catch(Exception $e) {
        echo "Error:" . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teoria</title>
    <link rel="stylesheet" href="../CSS/Result.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>
<main>
        <header>
        <div id="circle"></div>
        <h1 id="title">{<\InfoTag/>}</h1>
        <h3>Confira seus resultados</h3>
        <a href="../HTML/Home.php"><button id="back">Voltar</button></a>
        <select name="configs" id="cfg" onchange="location = this.value;">
            <option selected disabled hidden>Configurações</option>
            <option value="../BACKEND/CRUD/Update.php">Alterar Nome</option>
            <option value="../BACKEND/CRUD/Delete.php">Deletar Conta</option>
            <option value="../BACKEND/Logout.php">Sair</option>
        </select>
        </header>

        <div class="container">
            <section>
                <span>Você acertou: <?=$Hardware?> Questões.</span></br>
                <span><?=$msg?></span></br>
                <span>Sua pontuação Geral é de: <?=$_SESSION['Pont_Geral']?> <?=$situation?></span>
                <nav class="configs_infe"><a href="../HTML/TeoryHD.html"><button id="btop">Retornar à teoria</button></nav></a>
                <nav class="configs_infe"><a href="../HTML/QuizHD.html"><button id="btop">Tentar Novamente</button></nav></a>
            </section>
        </div>
</main>
</body>
</html>
