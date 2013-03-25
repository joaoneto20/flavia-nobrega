<?php
require 'headerAdm.php';
require 'menuAdm.php';
?>
<?php include 'conexao.php'; ?>
<hr>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span9" style=" max-width: 570px; margin-left:25% ;">
            <h3>
                <?php
                $uid = mysql_real_escape_string($_GET['id']); //pega o id do objeto
                $query = "SELECT * FROM imagem WHERE id= '$uid'"; //busca no banco de dados
                $exeqr = mysql_query($query) or die(mysql_error());

                if (mysql_num_rows($exeqr) <= 0) {
                    reader('listarImagem.php');
                }

                $res = mysql_fetch_assoc($exeqr);
                echo '<div class="img-polaroid"';
                echo $res['titulo'];
                echo '<br>';
                echo '<img width="800" height="500" src="imagem-fotos/'.$res['nome'].'" />';
                echo '</div>';
                echo '<a href="listarImagem.php" class="btn btn-info" style="text-align: center;">Voltar</a>';
                ?>
            </h3>
        </div>
    </div>
</div>
<?php
require 'footerAdm.php';
?>