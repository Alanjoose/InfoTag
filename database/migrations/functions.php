<?php
session_start();

function getUserName()
{
    return $_SESSION['name'];
}

function getUserPoints()
{
    return $_SESSION['points'];
}

function getUserEmail()
{
    return $_SESSION['email'];
}

$date = date('H:i:s');
if($date < 12)
{
    $presentation = "Bom dia ";
}
else if($date > 12 || $date < 18)
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