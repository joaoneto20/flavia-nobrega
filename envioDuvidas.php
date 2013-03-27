<?php
require 'conexao.php';
require 'config.php';
if (isset($_POST['enviar'])) {
    $assunto = $_POST["Duvidas em Geral"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $msg = $_POST["duvidas"];
    $remetente = 'flavia@flavianobrega.com';
    $nomeRemetente = 'Flávia Nobrega';
    
        sendMail($assunto, $msg, $email, $nome, $remetente, $nomeRemetente);
        echo "<script type='text/javascript'> 
                alert('Obrigado por perguntar! Logo entraremos em contato.'); 
                      </script>";
}
?>