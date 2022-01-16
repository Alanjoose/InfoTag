<?php
/*
@Author: Alan José;
@Date: 11/jan/2022;
@Desc: Aqui a sessão no servidor é destruida o usuário pode sair com segurança da aplicação;
*/
session_start();
session_destroy();
header('location: ../HTML/index.html');
?>