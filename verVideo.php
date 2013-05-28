<?php
require 'headerUsuario.php';
require 'menuUsuario.php';
?>
<?php include 'conexao.php'; ?>
<hr>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span9" style=" max-width: 570px; margin-left:25% ;">
            <h3>
                <?php
                $uid = mysql_real_escape_string($_GET['id']); //pega o id do objeto
                $query = "SELECT * FROM video WHERE id= '$uid'"; //busca no banco de dados
                $exeqr = mysql_query($query) or die(mysql_error());

                if (mysql_num_rows($exeqr) <= 0) {
                    reader('listarVideos.php');
                }
                try {
                    $res = mysql_fetch_assoc($exeqr);
                    echo '<div class="img-polaroid"';
                    echo htmlspecialchars(mysql_real_escape_string($res['titulo']));
                    echo '<br>';
                    echo stripslashes($res['endereco']);
                    echo '</div>';
                    echo '<a href="listarVideoUsuario.php" class="btn btn-info" style="text-align: center;">Voltar</a>';
                    //echo '<iframe width="425" height="350" src="http://www.youtube.com/embed/' . $res['endereco'] . '" frameborder="0" allowfullscreen></iframe>';
    
                    } catch (Exception $exc) {
                        echo $exc->getTraceAsString(mysql_error());
                        }
                ?>
            </h3>
        </div>
    </div>
</div>
<?php
require 'footerUsuario.php';
?>