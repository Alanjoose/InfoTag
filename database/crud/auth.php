<?php
    include '../dbconect.php';

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    try {
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "select * from usuario where email = '$email' and senha = '$senha'";
    $statement = $pdo->query($sql);
    $user = $statement->fetch();
    
    if($user === false)
    {
        header('location: ../../app/login.html?msg=Dados incorretos');
        exit();
    }

    header('location: ../../app/home.php');

    session_start();
    $_SESSION['login'] = true;
    $_SESSION['id'] = $user['id'];
    $_SESSION['nome'] = $user['nome'];
    $_SESSION['pontos'] = $user['pontos'];

    } catch (Exception $e) {
       echo "Error: " . $e->getMessage();
    }
?>