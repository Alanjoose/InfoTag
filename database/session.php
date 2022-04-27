<?php
    session_start();
    if(!isset($_SESSION['login']) || $_SESSION['login'] !== true)
    {
        header('location: ../app/login.html?msg=Inicie uma sessao antes');
        exit();
    }
?>