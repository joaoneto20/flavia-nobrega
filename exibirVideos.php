<?php
require 'headerAdm.php';
require 'menuAdm.php';
?>
<?php include 'conexao.php'; ?>
<hr>
<div class="container">
    <div class="row">
        <div class="span9">
<h3>
<?php
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
        </div>
    </div>
</div>
<?php
require 'footerAdm.php';
?>