<?php
session_start();
if(isset($_SESSION['Login']) || $_SESSION['Login'] === true) {
    session_destroy();
    header('location: index.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realize seu login</title>
    <link rel="stylesheet" href="../CSS/Login.css">
    <link rel="icon" type="imagen/png" href="../IMG/Itag.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>
    <main>
        <div class="return">
            <a href="index.html"><button id="voltar">Voltar</button></a>
        </div>
        <div id="circle"></div>
        <h1 id="title">Fazer login</h1>
        <form action="../BACKEND/CRUD/Login.php" method="post">
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <input type="submit" value="Enviar" id="send">
            <a href="ForgetPass.html"><span id="forget">Esqueci minha senha</span></a>
        </form>
    </main>
</body>
</html>