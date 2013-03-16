<?php
require 'headerAdm.php';
require 'menuAdm.php';
?>
<hr>
<div class="container-fluid">
    <div class="row-fluid">

            <h3 style="text-align: center;">Relação de usuários cadastrados</h3>
            
            <table class="table table-hover" style="max-width: 500px; margin-left: 30%;">
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
                            echo '<td><a class ="btn btn-success" href="editarUsuario.php?id=' . $res['id'] . '">Editar</a></td>';
                            echo '<td><a class ="btn btn-danger" href="#">Excluir</a><br></td>';
                            echo '</tr>';
                        }
                    }
                    ?>
                </tbody>
            </table>
    </div>
</div>
<?php
require 'footerAdm.php';
?>
