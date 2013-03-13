<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Artista Plastico</title>
        <link type="text/css" rel="stylesheet" href="CSS/styleIndex.css">
        <script type="text/javascript" src="js/modal.js"></script>
    </head>
    <body>
       <?php include 'confirmacaoAdmin.php';
        //include 'header.php'; ?>

<h1>Página restrita</h1>
<p>Olá, <?php include 'mostraLogado.php';?>!</p>
<br>
<p>você é administrador(a) deste site!</p>
<h3>Cadastro de vídeos.</h3>
<br>

<?php
    require 'conexao.php';
        
    if (isset($_POST['send'])){//verifica se o botão foi setado
    $titulo = HTMLSPECIALCHARS(mysql_real_escape_string($_POST["titulo"]));
    $endereco = HTMLSPECIALCHARS(mysql_real_escape_string($_POST["endereco"]));
    $descricao = HTMLSPECIALCHARS(mysql_real_escape_string(nl2br($_POST["descricao"])));
    
    $sql = "INSERT INTO video(titulo, endereco, descricao) VALUES ('$titulo','$endereco','$descricao')";
    
    $query = mysql_query($sql) or die (mysql_error());
	
	
   echo  "<script type='text/javascript'> 
    alert('Cadastro realizado com sucesso.'); 
    </script>";
}

?>

<form method="POST" action="#">
    <span>Título:</span>
    <br>
    <input type="text" name="titulo">
    <br>
    <span>Link do vídeo:</span>
    <br>
    <input type="text" name="endereco">
    <br>
    <span>Descrição:</span>
    <br>
    <textarea name="descricao" cols="25" rows="5">
    Enter your comments here...
    </textarea><br>
    <br>
    <input type="submit" value="Cadastrar" name="send"/>
    
</form>

<?php
    require 'conexao.php';
        
    if (isset($_POST['send'])){//verifica se o botão foi setado
    $titulo = HTMLSPECIALCHARS(mysql_real_escape_string($_POST['titulo']));
    $endereco = HTMLSPECIALCHARS(mysql_real_escape_string($_POST['endereco']));
    $descricao = HTMLSPECIALCHARS(mysql_real_escape_string(nl2br($_POST['descricao'])));
    
    $sql = "INSERT INTO video('titulo','endereco','descricao') VALUES ('$titulo','$endereco','$descricao')";
    
    $query = mysql_query($sql) or die (mysql_error());
	
	
   echo  "<script type='text/javascript'> 
    alert('Cadastro realizado com sucesso.'); 
    </script>";
}

?>