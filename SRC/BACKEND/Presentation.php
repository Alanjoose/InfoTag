<?php
/*
@Author: Alan José;
@Date: 11/jan/2022;
@Desc: Aqui são processadas as opções relacionadas à marcação do sexo do usuário e monitoramento da aplicação;
*/
session_start();
$Presentation = "";
if($_SESSION['Sexo'] == "M" || $_SESSION['Sexo'] == "O") {
    $Presentation = "Bem-Vindo";
}
else if($_SESSION['Sexo'] == "F") {
    $Presentation = "Bem-Vinda";
}
?>