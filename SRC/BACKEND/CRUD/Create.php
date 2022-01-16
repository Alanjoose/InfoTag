<?php
$file = fopen('../Pendents.csv', 'r'); //Abre o arquivo de pendentes
$line = fgets($file);
$array = explode(",", $line);
$string = $array[0];
$target = str_replace(array("\r\n", "\r", "\n"), "", $string);
$name = $_POST['nome'];
$password = $_POST['senha'];
$sex = $_POST['sx'];
$rec = $_POST['emailrec'];
if(is_string($target)) {
    try{
        $pdo = new PDO("mysql:host=localhost;dbname=Itag", "alan", "senha");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Instanciamento da classe PDO e conexão segura com o SGBD;
        
        $statement = $pdo->prepare("insert into User (Nome, Email, Senha, Sexo, Email_Recuperador) values ('$name', '$target', '$password', '$sex', '$rec')");
        $statement->execute();
        echo $statement->rowCount(); //Aramazenamento e execução dos comandos e métodos derivados;
        header('location: ../../HTML/Loginpage.php');
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage(); //Captura possivel falha no cadastro;
        }
}
else {
    echo "Houve um erro"; //Captura caso não seja do tipo string;
}
?>