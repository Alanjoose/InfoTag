<?php
session_start();
if(isset($_SESSION['Login']) || $_SESSION['Login'] == true) {
    session_destroy();
    header('location: ../HTML/Login.html?msg=Voce ja estava logado');
}

$email = $_POST['email']; //Recebe os dados do formulario LOGIN;
$password = $_POST['senha'];

    $pdo = new PDO("mysql:host=localhost;dbname=Itag", "alan", "senha");
    $sql = "select * from User where Email = '$email' and Senha = '$password'";
    $statement = $pdo->query($sql); //Método de consulta do PDO;
    $user = $statement->fetch();

    if($user === false) {
        header('location: ../../HTML/Loginpage.php?msg=Dados incorretos'); //Verifica se os dados conferem;
        exit();
    }
    else {
        header('location: ../../HTML/Home.php');
    }

    session_start();
    $_SESSION['Login'] = true;
    $_SESSION['Id'] = $user['Id'];
    $_SESSION['Nome'] = $user['Nome'];
    $_SESSION['Sexo'] = $user['Sexo'];
    $_SESSION['Pont_Geral'] = $user['Pont_Geral'];
    
?>