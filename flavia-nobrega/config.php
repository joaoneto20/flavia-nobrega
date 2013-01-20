<?php function sendMail($assunto,$msg,$remetente,$nomeRemetente,$email,$nome){
require_once('Mailer/class.phpmailer.php') ;
$mail = new PHPMailer();//INICIA A CLASSE

$mail->IsSMTP();//Habilita envio smtp
$mail->SMTPAuth = true;//Ativa e-mail autenticado
$mail->Host = 'smtp.gmail.com';//servidor de envio
$mail->Port = '587';//porta de envio

$mail->Username = 'joaoneto20@gmail.com';
$mail->Password = 'vovo290333';

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
