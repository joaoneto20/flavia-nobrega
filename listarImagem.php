<?php
require 'headerAdm.php';
require 'menuAdm.php';
?>
<hr>
<div class="container-fluid">
    <div class="row-fluid">

            <h3 style="text-align: center;">Relação de Imagens cadastradas</h3>
            <table class="table table-hover table-bordered" style="max-width: 500px; margin-left: 30%;">
                <tbody>
                    <tr>
                        <th style="text-align: left;">Nome</th>
                        <th style="text-align: center;">Ações</th>
                    </tr>
                    <?php
                    require 'conexao.php';
                    
                    
                    $numreg = 5; // Quantos registros por página vai ser mostrado
                        if (!isset($pg)) {
                            $pg = 0;
                        }
                    $inicial = @$_GET['pg'] * $numreg;
                    
                    $sql = mysql_query("SELECT * FROM imagem LIMIT $inicial, $numreg");
                    
                    $sql_conta = mysql_query("SELECT * FROM imagem");
	
                    $quantreg = mysql_num_rows($sql_conta);
                    
                        while ($res = mysql_fetch_array($sql)) {
                            echo '<tr>';
                            echo '<td style="text-align: left;"><a href="#?id=' . $res['id'] . '">' . $res['titulo'] . '</a></td>';
                            echo '<td style="text-align: center;"><a class ="btn btn-success" href="#">Editar</a>&nbsp;';
                            echo '<a class ="btn btn-danger" href="#">Excluir</a><br></td>';
                            echo '</tr>';
                        }
                    
                    

                    /*$query = "SELECT id, nome FROM imagem WHERE id != '' ORDER BY id DESC";

                    $exequery = mysql_query($query) or die(mysql_error());

                    if (mysql_num_rows($exequery) <= 0) {
                        echo "<script type='text/javascript'> 
                            alert('Tabela Vazia'); 
                                </script>";
                    } else {

                        while ($res = mysql_fetch_assoc($exequery)) {

                            echo '<tr>';
                            echo '<td><a href="#?id=' . $res['id'] . '">' . $res['nome'] . '</a></td>';
                            echo '<td><a class ="btn btn-success" href="#">Editar</a></td>';
                            echo '<td><a class ="btn btn-danger" href="#">Excluir</a><br></td>';
                            echo '</tr>';
                        }
                    }*/
                    ?>
                </tbody>
            </table>
             <div class="pagination pagination-centered">
                <?php include 'paginacao.php'; ?>
            </div>
        </div>
</div>
<?php
require 'footerAdm.php';
?>