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
<br>
<h3>Relação de vídeos Cadastrados</h3>

<?php
require 'conexao.php';

$query = "SELECT id, titulo FROM video WHERE id != '' ORDER BY id DESC";

$exequery = mysql_query($query) or die(mysql_error());

if(mysql_num_rows($exequery)<=0){
    echo  "<script type='text/javascript'> 
    alert('Tabela Vazia'); 
    </script>";
}else{
    
    while ($res = mysql_fetch_assoc($exequery)){
       
        echo '<a href="exibirVideos.php?id='.$res['id'].'">'.$res['titulo'].'</a> ';
        echo '<a href="#">editar</a> ';
        echo '<a href="#">excluir</a><br>';
        }
}

?>
