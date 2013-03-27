<?php

require 'conexao.php';
require 'config.php';
if (isset($_POST['enviar'])) {
    $assunto = addcslashes(trim($_POST["Duvidas em Geral"]));
    $nome = addcslashes(trim($_POST["nome"]));
    $email = addcslashes(trim($_POST["email"]));
    $msg = addcslashes(trim($_POST["duvidas"]));
    $remetente = addcslashes(trim('flavia@flavianobrega.com'));
    $nomeRemetente = addslashes(trim('Duvidas Video-Aulas'));
    
        sendMail($assunto, $msg, $email, $nome, $remetente, $nomeRemetente);
        echo "<script type='text/javascript'> 
                alert('Obrigado por perguntar! Logo entraremos em contato.'); 
                      </script>";
}
?>