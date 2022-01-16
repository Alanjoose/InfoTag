<?php
/*
@Author: Alan José;
@Date: 11/jan/2022;
@Desc: Arquivo intermediário que recebe a confirmação de um boolean no formato de string e decide o redirecionamento;
*/
$response = $_POST['cf'];
$confirm = false;
if($response === "true") {
    $confirm = true;
    header('location: ../../HTML/Createdef.html');
}
else {
    header('location: ../../HTML/InfoTag.html');
    exit();
}
?>