<?php
require 'headerAdm.php';
require 'menuAdm.php';
?>
<hr>
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
<?php
require 'footerAdm.php';
?>