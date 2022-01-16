<?php
require_once('./src/PHPMailer.php');
require_once('./src/SMTP.php');
require_once('./src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$email = $_POST['email'];
if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    
    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'infotagsoftware@gmail.com';
        $mail->Password = 'infotg6690';
        $mail->Port = 587;
        $mail->setFrom('infotagsoftware@gmail.com');
        $mail->addAddress($email);
        
        $mail->isHTML(true);
        $mail->Subject = 'Recuperacao de Senha.';
        $mail->Body = '<h1>{<\Infotag/>}</h1>
        <h2>Email para recuperacao de senha.</h2>
        <h3>Siga as etapas para recuperar a sua senha.</h3>
        <p>Você selecionou a </p>
        <a href="http://localhost:8000/HTML/Confirm.html"><button>Confirmar Cadastro</a>';
        $mail->AltBody = '{<\Infotag/>}
        Obrigado por escolher nossa aplicação.
        Recebemos uma solicitação para criação de conta em nossa aplicação.
        Se recebeu este email, está usando um email válido, para confirmar que foi você mesmo que fez essa
        solicitação, clique no link abaixo e confirme na opção.
        <a href="http://localhost:8000/HTML/Confirm.html">Confirmar Cadastro</a>';
        
        if($mail->send()) {
            echo 'Cheque sua caixa de Emails.';
            $file = fopen('../Pendents.csv', 'w');
            fwrite($file, $email);
            fwrite($file, "\n");
            fclose('../Pendents.csv');
            header('location: ../../HTML/Redirect.html?msg=Verifique sua caixa de emails');
            exit();
        }
        else {
            echo 'Email nao enviado!';
        }
    }
    catch(Exception $e) {
        echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
    }
}
else {
    header('location: ../..HTML/Create.html?msg=Endereco de email invalido');
}

?>