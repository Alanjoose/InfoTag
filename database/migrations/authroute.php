<?php
/*
@Author -> AlanJS;
@Project -> InfoTag;
@Lib -> PDo;
*/

include './dbconection.php';

$email = $_POST['email'];
$password = $_POST['password'];

try
{
    $sql = "select * from user where email = $email and password = $password";
    $query = $pdo->query($sql);
    $login = $query->fetch();
    
    if($login === false)
    {
        header('location: ../app/login.heml?msg=Dados incorretos');
        exit();
    }
    else
    {
        header('location: ../app/home.php');
        session_start();
        $_SESSION['logged'] = true;
        $_SESSION['id'] = $login['id'];
        $_SESSION['name'] = $login['name'];
        $_SESSION['name'] = $login['name'];
        $_SESSION['name'] = $login['name'];
    }
}
catch(Exception $exception)
{

}
?>