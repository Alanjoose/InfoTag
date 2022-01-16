<?php
/*
@Author: Alan José;
@Date: 11/jan/2022;
@Desc: Aqui primeira interação do sistema com o usuário, onde é enviado um email para validação do usuário;
*/
require_once('./src/PHPMailer.php');
require_once('./src/SMTP.php');
require_once('./src/Exception.php'); //Aplicação da biblioteca PHPMailer;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP; //Importação das exceções relativas ao envio do email;
use PHPMailer\PHPMailer\Exception;

$email = $_POST['email'];
if(filter_var($email, FILTER_VALIDATE_EMAIL)) { //Filtro de email(Verifica se é válido)/(security layer);
    
    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'infotagsoftware@gmail.com'; //Definição de protocolo SMTP e dados para autenticação do email da aplicação;
        $mail->Password = 'infotg6690';
        $mail->Port = 587;
    
        $mail->setFrom('infotagsoftware@gmail.com');
        $mail->addAddress($email);
    
        $mail->isHTML(true);
        $mail->Subject = 'Solicitacao para criacao de conta.';
        $mail->Body = '<h1>{<\Infotag/>}</h1>
        <h2>Obrigado por escolher nossa aplicação</h2>
        <h3>Recebemos uma solicitação para criação de conta em nossa aplicação.</h3>
        <p>Se recebeu este email, está usando um email válido, para confirmar que foi você mesmo que fez essa
        solicitação, clique no botão abaixo e confirme na opção.</p>
        <a href="http://localhost:8000/HTML/Confirm.html"><button>Confirmar Cadastro</a>'; //Corpo do Email;
        $mail->AltBody = '{<\Infotag/>}
        Obrigado por escolher nossa aplicação.
        Recebemos uma solicitação para criação de conta em nossa aplicação.
        Se recebeu este email, está usando um email válido, para confirmar que foi você mesmo que fez essa
        solicitação, clique no link abaixo e confirme na opção.
        <a href="http://localhost:8000/HTML/Confirm.html">Confirmar Cadastro</a>'; //Corpo alternativo do email;
    
        if($mail->send()) {
            echo 'Cheque sua caixa de Emails.';
            $file = fopen('../Pendents.csv', 'w');
            fwrite($file, $email);
            fwrite($file, "\n"); //Escreve em um arquivo CSV o email do usuário com quebra de linha;
            fclose('../Pendents.csv');
            header('location: ../../HTML/Redirect.html?msg=Verifique sua caixa de emails');
            exit();
        }
        else {
            echo 'Email nao enviado!';
        }
    }
    catch(Exception $e) {
        echo "Erro ao enviar mensagem: {$mail->ErrorInfo}"; //Captura de exceção;
    }
}
else {
    header('location: ../..HTML/Create.html?msg=Endereco de email invalido');
}



?>
