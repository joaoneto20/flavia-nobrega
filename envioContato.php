<?php
require 'config.php';
if (isset($_POST['enviar'])) {
    $assunto = 'Contato pelo Site';
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $msg = $_POST["assunto"];
    $remetente = 'flavia@flavianobrega.com';
    $nomeRemetente = 'Flávia Nobrega';
    
        sendMail($assunto, $msg, $email, $nome, $remetente, $nomeRemetente);
        echo "<script type='text/javascript'> 
                alert('Obrigado por perguntar! Logo entraremos em contato.'); 
                      </script>";
        echo "<script language = 'javascript'> location.href = 'contato.php'; </script>";
}
?>