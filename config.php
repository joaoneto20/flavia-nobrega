<?php function sendMail($assunto,$msg,$remetente,$nomeRemetente,$email,$nome){
require_once('Mailer/class.phpmailer.php') ;
require_once ('Mailer/class.smtp.php');
$mail = new PHPMailer();//INICIA A CLASSE

$mail->CharSet = 'UTF-8';
$mail->Mailer = 'smtp';
$mail->SMTPSecure = 'ssl';
$mail->IsSMTP();//Habilita envio smtp
$mail->Host = 'smtp.gmail.com';//servidor de envio
$mail->Port = '465';//porta de envio
$mail->SMTPAuth = true;//Ativa e-mail autenticado

$mail->Username = 'vinicius.eneas@gmail.com';
$mail->Password = 'v1e2cl2114';

$mail->From = $remetente;//remetente
$mail->FromName = utf8_decode($nomeRemetente);//nome remetente

$mail->IsHTML(true);

$mail->Subject = utf8_decode($assunto);//assunto
$mail->Body = utf8_decode($msg);//mensagem
$mail->AddAddress($email,utf8_decode($nome));

    if(!$mail->Send()){
        echo 'Email não enviado com sucesso' .$mail->ErrorInfo;
    }else{
        echo 'Email enviado com sucesso';
    }
}
?>
