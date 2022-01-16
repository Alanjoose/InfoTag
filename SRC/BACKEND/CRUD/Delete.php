<?php
session_start();
if(!isset($_SESSION['Login']) || $_SESSION['Login'] !== true) {
    header('location: ../../HTML/Loginpage.php');
    exit();
}
 try{
    $pdo = new PDO("mysql:host=localhost;dbname=Itag", "alan", "senha");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Instanciamento da classe PDO e conexão segura com o SGBD;
    
    $statement = $pdo->prepare("delete from User where Id = :id");
    $statement->bindValue(":id", $_SESSION['Id']);
    $statement->execute();
    header('location: ../../HTML/index.html?msg=Conta deletada com sucessso');
} catch(PDOException $e) {
        echo "Error: " . $e->getMessage(); //Captura possivel falha no cadastro;
}
?>