<?php
/*
@Author: Alan José;
@Date: 16/jan/2022;
@Desc: Aqui são manipuladas todas as datas e funções que as usam;
*/
session_start();
$name = $_POST['nome'];

try {
    $pdo = new PDO("mysql:host=localhost;dbname=Itag", "alan", "senha");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = $pdo->prepare("update User set Nome = :n where Id = :id");
    $statement->bindValue(":n", $name);
    $statement->bindValue("id", $_SESSION['Id']);
    $statement->execute();
    header('location: ../../HTML/Configs.html');
} catch(Exception $e) {
    echo "Error:" . $e->getMessage();
}
?>