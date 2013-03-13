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
             include 'conexao.php'; ?>

<h1>Página restrita</h1>
<p>Olá, <?php include 'mostraLogado.php';?>!</p>
<br>
<p>você é administrador(a) deste site!</p>
<br>
<h3><?php
$uid = mysql_real_escape_string($_GET['id']);//pega o id do objeto
$query = "SELECT * FROM video WHERE id= '$uid'";//busca no banco de dados
$exeqr = mysql_query($query) or die (mysql_error());

if(mysql_num_rows($exeqr)<=0){
    reader('listarVideos.php');
}

$res = mysql_fetch_assoc($exeqr);

echo $res['titulo'];
echo '<br>';
echo '<iframe width="560" height="315" src="http://www.youtube.com/embed/'.$res['endereco'].'" frameborder="0" allowfullscreen></iframe>';
?></h3>

