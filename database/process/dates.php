<?php
$date = date('H:i:s');
$presentation;

if($date < 12)
{
    $presentation = "Bom dia ";
}
else if($date >= 12)
{
    $presentation = "Boa tarde ";
}
else
{
    $presentation = "Boa noite ";
}

function getPresentation()
{
    global $presentation;
    return $presentation;
}
?>