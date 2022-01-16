<?php
/*
@Author: Alan José;
@Date: 14/jan/2022;
@Desc: Aqui são manipuladas todas as datas e funções que as usam;
*/
session_start();
$mail = $_SESSION['Email'];
if(isset($_POST['mark'])) {
    $file = fopen('Notifys.csv', 'a');
    for($j = 0; $j < count($_POST['mark']); $j++) {
        fwrite($file, $mail, '\n');
        fclose($file);
    }
    header('location: ../HTML/Configs.html');
}
?>