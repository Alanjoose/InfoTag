<?php
/*
@Author: Alan José;
@Date: 11/jan/2022;
@Desc: Aqui são manipuladas todas as datas e funções que as usam;
*/
$Dates = date("H:i:s");
$Now = "";
if($Dates < 24 && $Dates < 12) {
    $Now = "Bom Dia";
}
else if($Dates > 12 && $Dates < 18) {
    $Now = "Boa Tarde";
}
else {
    $Now = "Boa Noite";
}
?>