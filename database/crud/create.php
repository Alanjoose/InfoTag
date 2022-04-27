<?php
    include('../dbconect.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $pontos = 0;
    $idade = $_POST['idade'];

    try
    {
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $statement = $pdo->prepare('insert into usuario(nome, email, senha, idade)
         values(?, ?, ?, ?)');
        $statement->bindParam(1, $nome);
        $statement->bindParam(2, $email);
        $statement->bindParam(3, $senha);
        $statement->bindParam(4, $idade);
        $statement->execute();
        header('location: ../../app/login.html?msg=Conta criada com sucesso');
      
    }
    catch(Exception $e)
    {
        echo "Error: " . $e->getMessage();
    }
     
?>