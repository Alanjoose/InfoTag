<?php
define("SERVE", "mysql:host=localhost;dbname=infotag");
define("USER", "Alan");
define("PASSWORD", "qofv1424");

$pdo = new PDO(SERVE, USER, PASSWORD);
global $pdo;

//Esse arquivo deverá ser incluído em todas as outras operações;
?>