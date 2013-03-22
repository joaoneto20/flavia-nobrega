<?php
require 'headerUsuario.php';
require 'menuUsuario.php';
?>
<hr>
<div class="container-fluid">
    <div class="row-fluid">
            <h3 style="text-align: center;">Relação de Vídeos Cadastrado</h3>
            <table class="table table-hover table-bordered" style="max-width: 800px; margin-left: 20%;">
                <tbody>
                    <?php
                    require 'conexao.php';

                    $query = "SELECT id, titulo FROM video WHERE id != '' ORDER BY id DESC";

                    $exequery = mysql_query($query) or die(mysql_error());

                    if (mysql_num_rows($exequery) <= 0) {
                        echo "<script type='text/javascript'> 
    alert('Tabela Vazia'); 
    </script>";
                    } else {

                        while ($res = mysql_fetch_assoc($exequery)) {
                            echo '<tr>';
                            echo '<td style="text-align:center;"><a href="verVideo.php?id=' . $res['id'] . '">' . $res['titulo'] . '</a></td>';
                            echo '</tr>';

                        }
                    }
                    ?>
                </tbody>
            </table>
    </div>
</div>
<?php
require 'footerUsuario.php.php';
?>
