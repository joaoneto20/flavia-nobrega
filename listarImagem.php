<?php
require 'headerAdm.php';
require 'menuAdm.php';
?>
<hr>
<div class="container">
    <div class="row">
        <div class="span9">

            <h3>Relação de Imagens cadastradas</h3>
            <?php
            require 'conexao.php';

            $query = "SELECT id, nome FROM imagem WHERE id != '' ORDER BY id DESC";

            $exequery = mysql_query($query) or die(mysql_error());

            if (mysql_num_rows($exequery) <= 0) {
                echo "<script type='text/javascript'> 
    alert('Tabela Vazia'); 
    </script>";
            } else {

                while ($res = mysql_fetch_assoc($exequery)) {
                    echo '<table class="table">';
                    echo '<tbody>';
                    echo '<tr>';
                    echo '<td><a href="#?id=' . $res['id'] . '">' . $res['nome'] . '</a></td>';
                    echo '<td><a href="#">Editar</a></td>';
                    echo '<td><a href="#">Excluir</a><br></td>';
                    echo '</tr>';
                    echo '</tbody>';
                    echo '</table>';
                }
            }
            ?>
        </div>
    </div>
</div>
<?php
require 'footerAdm.php';
?>