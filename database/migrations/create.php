<?php
/*
@Author -> AlanJS;
@Project -> InfoTag;
@Lib -> PDo;
*/

include './dbconection.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$crypto = md5($password);
$createData = date('Y:m:d');
$age = $_POST['age'];

try
{
    $statement = $pdo->prepare('insert into
     user(name, email, password, age, created)
      values (?, ?, ?, ?, ?)');
    $statement->bindParam(1, $name);
    $statement->bindParam(2, $email);
    $statement->bindParam(3, $crypto);
    $statement->bindParam(4, $age);
    $statement->bindParam(5, $createData);
    $statement->execute();
    //@Debug ->
    echo $statement->rowCount();
}
catch(Exception $exception)
{
    echo "Error : " . $exception->getMessage();
}

?>