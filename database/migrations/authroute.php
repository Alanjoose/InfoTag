<?php
/*
@Author -> AlanJS;
@Project -> InfoTag;
@Lib -> PDO;
*/

include './dbconection.php';

$email = $_POST['email'];
$password = $_POST['password'];
$cryptoPassword = md5($password);
try
{
    $sql = "select * from user where email = '$email' and password = '$cryptoPassword'";
    $query = $pdo->query($sql);
    $login = $query->fetch();
    
    if($login === false)
    {
        header('location: ../../app/login.html?msg=Dados incorretos');
        exit();
    }

    header('location: ../../app/home.php');
    session_start();
    $_SESSION['login'] = true;
    $_SESSION['id'] = $login['id'];
    $_SESSION['name'] = $login['name'];
    $_SESSION['email'] = $login['email'];
    $_SESSION['points'] = $login['points'];
}
catch(Exception $exception)
{
    echo "Error : " . $exception->getMessage();
}
?>