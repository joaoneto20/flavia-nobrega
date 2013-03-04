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

<form method="POST" action="" enctype="multipart/form-data">
    Arquivo:<br>
    <input type="file" name="arq">
    <br>
    <input type="submit" value="Enviar" name="send"/>
    
</form>

<?php
    ini_set('upload_max_filesize', '8M');
    
    if (isset($_POST['send'])){//verifica se o botão foi setado
    $arq = $_FILES['arq'];//arq é o nome do input file
    ini_set('upload_max_filesize', '8M');
    set_time_limit(0);
    
    echo '<pre';    print_r($arq);    echo '</pre>';
}

?>

<a href="info.php">php ini</a>