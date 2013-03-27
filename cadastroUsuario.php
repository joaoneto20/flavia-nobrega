<?php

require_once 'conexao.php';

$nome = $_POST["nome"];
$nomeUsuario = strtolower($_POST["nomeUsuario"]);
$email = $_POST["email"];
$senha = md5($_POST["senha"]);

if (strstr($email, '@') != true) {
    echo "<script language = 'javascript'>alert('E-mail inválido!');</script>";
} elseif (eregi('[^a-zA-Z0-9_]', $nomeUsuario)) {
    
    echo("<script language = 'javascript'>alert('Login não pode conter caracteres especiais!');</script>");
    echo "<script language = 'javascript'> location.href = 'cadastraUsuario.php'; </script>";
    die(mysql_error());
    
} else {
    // função que grava os dados no banco de dados
    $sql = "INSERT INTO pessoa(nome, nomeUsuario, email, senha)
		   VALUES ('$nome', '$nomeUsuario', '$email', '$senha')";

    $query = mysql_query($sql) or die(mysql_error());
    echo "<script language = 'javascript'>alert('Cadastrado com sucesso!');</script>";
    echo "<script language = 'javascript'> location.href = 'cadastraUsuario.php'; </script>";
}

require_once 'config.php';

$senhaEnvio = $_POST['senha'];
$assunto = 'Usuário Cadastrado com Sucesso';
$msg = "AGORA INFORMANDO O USUÁRIO E SENHA AUTOMATICAMENTE!!<br><br>Cadastro Realizado com sucesso.
        Segue abaixo seu usuário e senha.<br><br>Usuario: $nomeUsuario <br> Senha: $senhaEnvio<br>";
$remetente = $email;
$nomeRemetente = $nome;
$from = 'flavia@flavianobrega.com';
$nomeFrom = 'Flávia Nóbrega';

sendMail($assunto, $msg, $from, $nomeFrom, $remetente, $nomeRemetente);
?>