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
<h3>Adicionar Imagem.</h3>
<br>

<form method="POST" action="" enctype="multipart/form-data">
    Arquivo:<br>
    <input type="file" name="imagem">
    <br>
    <input type="submit" value="Enviar" name="enviei"/>
</form>

<?php
	if(isset($_POST['enviei'])){
		$pasta = 'imagem-fotos';
		$permite = array('image/jpg','image/jpeg','image/pjpeg');
		
		$imagem = $_FILES['imagem'];
		$destino = $imagem['tmp_name'];
		$nome = $imagem['name'];
		$tipo = $imagem['type'];
		
		require('uploadImagem.php');
		
		if(!empty($nome) && in_array($tipo, $permite)){
			upload($destino, $nome, 460, $pasta);
                        echo '<script>alert("Enviado com sucesso!");</script>';
		}else{
			echo "Aceitamos apensa imagens no formato JPEG";
		}
	}
?>

<a href="info.php">php ini</a>