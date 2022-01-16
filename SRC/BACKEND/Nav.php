<?php
/*
@Author: Alan José;
@Date: 11/jan/2022;
@Desc: Previne que o usuário faça o volte à página anterior com a aplicação aberta, (security layer);
*/
session_start();
if(isset($_SESSION['Login']) || $_SESSION['Login'] === true) {
    session_destroy();
    header('location: ../HTML/index.html?msg=Voce passou por logout');
    exit();
}

?>