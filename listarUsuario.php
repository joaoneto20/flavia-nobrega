<?php
require 'headerAdm.php';
require 'menuAdm.php';
?>
<hr>
<div class="container">
    <div class="row">
        <div class="span9" style="margin-left: 10%;">

            <h3>Relação de usuários cadastrados</h3>
            <table class="table table-hover">
                <tbody>

                    <?php
                    require 'conexao.php';

                    $query = "SELECT id, nome, nomeUsuario, email FROM pessoa WHERE id != '' ORDER BY id DESC";

                    $exequery = mysql_query($query) or die(mysql_error());

                    if (mysql_num_rows($exequery) <= 0) {
                        echo "<script type='text/javascript'> 
                alert('Tabela Vazia'); 
                </script>";
                    } else {

                        while ($res = mysql_fetch_assoc($exequery)) {
                            echo '<tr>';
                            echo '<td><a href="#?id=' . $res['id'] . '">' . $res['nome'] . '</a></td>';
                            echo '<td>' . $res['nomeUsuario'] . '</td>';
                            echo '<td>' . $res['email'] . '</td>';
                            echo '<td><a href="editarUsuario.php?id=' . $res['id'] . '">Editar</a></td>';
                            echo '<td><a href="#">Excluir</a><br></td>';
                            echo '</tr>';
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
require 'footerAdm.php';
?>
