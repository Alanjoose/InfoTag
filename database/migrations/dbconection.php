<?php
/*
@Author -> AlanJS;
@Project -> InfoTag;
@Lib -> PDo;
*/

define('SERVE', 'mysql:host=localhost;dbname=infotag');
define('USERNAME', 'Alan');
define('PASSWORD', 'qofv1424');

try
{
    $pdo = new PDO(SERVE, USERNAME, PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    global $pdo;
}
catch(PDOException $pdoException)
{
    echo "Error : " . $pdoException->getMessage();
    exit();
}
?>