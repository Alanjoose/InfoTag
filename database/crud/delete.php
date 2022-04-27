<?php
    include '../dbconect.php';

    session_start();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = $pdo->prepare('delete from usuario where id = :id');
    $statement->bindValue(":id", $_SESSION['id']);
    $statement->execute();
    header('location: ../../app/index.html?msg=Sua conta foi deletada com sucesso');
    exit();

?>