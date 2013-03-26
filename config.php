<?php function sendMail($assunto,$msg,$remetente,$nomeRemetente,$email,$nome){
require_once('Mailer/class.phpmailer.php');
require_once ('Mailer/class.smtp.php');
$mail = new PHPMailer();//INICIA A CLASSE

$mail->Mailer = 'smtp';
$mail->SMTPSecure = 'ssl';
$mail->IsSMTP();//Habilita envio smtp
$mail->Host = 'smtp.flavianobrega.com';//servidor de envio
$mail->Port = '465';//porta de envio
$mail->SMTPAuth = true;//Ativa e-mail autenticado

$mail->Username = 'flavia@flavianobrega.com';
$mail->Password = 'admin2013fla';

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
