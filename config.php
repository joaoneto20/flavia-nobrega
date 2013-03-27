<?php

function sendMail($assunto, $msg, $email, $nome, $remetente, $nomeRemetente) {
    require_once 'Mailer/class.phpmailer.php';
    require_once 'Mailer/class.smtp.php';
    $mail = new PHPMailer(); //INICIA A CLASSE

    $mail->Mailer = 'smtp';
    $mail->SMTPSecure = 'ssl';
    $mail->IsSMTP(); //Habilita envio smtp
    $mail->Host = 'smtp.flavianobrega.com'; //servidor de envio
    $mail->Port = '465'; //porta de envio
    $mail->SMTPAuth = true; //Ativa e-mail autenticado

    $mail->Username = 'flavia@flavianobrega.com';
    $mail->Password = 'admin2013fla';

    $mail->From = $email; // email de quem esta enviando
    $mail->FromName = utf8_decode($nome); //nome de quem esta enviando

    $mail->IsHTML(true);

    $mail->Subject = utf8_decode($assunto); //assunto
    $mail->Body = utf8_decode($msg); //mensagem
    $mail->AddAddress($remetente, utf8_decode($nomeRemetente));//remetente e nome remetente

    if (!$mail->Send()) {
        echo 'Email não enviado com sucesso' . $mail->ErrorInfo;
    } else {
        echo 'Email enviado com sucesso';
    }
}
?>
