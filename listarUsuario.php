<?php
require 'headerAdm.php';
require 'menuAdm.php';
require 'conexao.php';
?>
<hr>
<div class="container-fluid">
    <div class="row-fluid">

            <h3 style="text-align: center;">Relação de usuários cadastrado</h3>
            
            <table class="table table-hover table-bordered" style="max-width: 800px; margin-left: 15%;">
                <tbody>
                    <tr>
                        <th style="text-align: left;">Nome</th>
                        <th style="text-align: center;">Login</th>
                        <th style="text-align: center;">E-mail</th>
                        <th style="text-align: center;">Ações</th>
                    </tr>
                    <?php                    
                    $numreg = 5; // Quantos registros por página vai ser mostrado
                        if (!isset($pg)) {
                            $pg = 0;
                        }
                    $inicial = @$_GET['pg'] * $numreg;
                    
                    $sql = mysql_query("SELECT * FROM pessoa LIMIT $inicial, $numreg");
                    
                    $sql_conta = mysql_query("SELECT * FROM pessoa");
	
                    $quantreg = mysql_num_rows($sql_conta);
                    
                    while ($res = mysql_fetch_assoc($sql)) {
                            echo '<tr>';
                            echo '<td style="text-align: left;"><a href="#?id=' . $res['id'] . '">' . HTMLSPECIALCHARS(mysql_real_escape_string($res['nome'])) . '</a></td>';
                            echo '<td>' . HTMLSPECIALCHARS(mysql_real_escape_string($res['nomeUsuario'])) . '</td>';
                            echo '<td>' . HTMLSPECIALCHARS(mysql_real_escape_string($res['email'])) . '</td>';
                            echo '<td style="text-align: center;"><a class ="btn btn-success" href="editarUsuario.php?id=' . $res['id'] . '">Editar</a>&nbsp;';
                            echo '<a class ="btn btn-danger" href="listarUsuario.php?del=' . $res['id'] . '">Excluir</a><br></td>';
                            echo '</tr>';
                        }
                    
                    
                    /*$query = "SELECT id, nome, nomeUsuario, email FROM pessoa WHERE id != '' ORDER BY id DESC";
                    $exequery = mysql_query($query) or die(mysql_error());

                    if (mysql_num_rows($exequery) <= 0) {
                        echo "<script type='text/javascript'> 
                alert('Tabela Vazia'); 
                </script>";
                    } else {

                        while ($res = mysql_fetch_assoc($exequery)) {
                            echo '<tr>';
                            echo '<td style="text-align: left;"><a href="#?id=' . $res['id'] . '">' . $res['nome'] . '</a></td>';
                            echo '<td>' . $res['nomeUsuario'] . '</td>';
                            echo '<td>' . $res['email'] . '</td>';
                            echo '<td style="text-align: right;"><a class ="btn btn-success" href="editarUsuario.php?id=' . $res['id'] . '">Editar</a>&nbsp;';
                            echo '<a class ="btn btn-danger" href="listarUsuario.php?del=' . $res['id'] . '">Excluir</a><br></td>';
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

<?php
//###### excluir do banco ########

if(!empty($_GET['del'])){
    $delid = mysql_real_escape_string($_GET['del']);//pega o id do usuário a ser excluido
    $querydel = "DELETE FROM pessoa WHERE id = '$delid'";// query para eliminar do banco
    $exeqrrdel = mysql_query($querydel) or die;//executa a query
    if($exeqrrdel){
        echo '<script>alert("Usuário excluído com sucesso!");</script>';
    }
}
?>
