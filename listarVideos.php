<?php
require 'headerAdm.php';
require 'menuAdm.php';
?>
<hr>
<div class="container-fluid">
    <div class="row-fluid">
            <h3 style="text-align: center;">Relação de Vídeos Cadastrado</h3>
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
                    
                    $sql = mysql_query("SELECT * FROM video LIMIT $inicial, $numreg");
                    
                    $sql_conta = mysql_query("SELECT * FROM video");
	
                    $quantreg = mysql_num_rows($sql_conta);
                    
                        while ($res = mysql_fetch_array($sql)) {

                            echo '<tr>';
                            echo '<td style="text-align: left;"><a href="exibirVideos.php?id=' . $res['id'] . '">' . HTMLSPECIALCHARS(mysql_real_escape_string($res['titulo'])) . '</a></td>';
                            echo '<td style="text-align: center;"><a class ="btn btn-success" href="editarVideo.php?id=' . $res['id'] . '">Editar</a>&nbsp;';
                            echo '<a class ="btn btn-danger" href="listarVideos.php?del=' . $res['id'] . '">Excluir</a><br></td>';
                            echo '</tr>';

                        }

                    /*$query = "SELECT id, titulo FROM video WHERE id != '' ORDER BY id DESC";

                    $exequery = mysql_query($query) or die(mysql_error());

                    if (mysql_num_rows($exequery) <= 0) {
                        echo "<script type='text/javascript'> 
                                alert('Tabela Vazia'); 
                                </script>";
                    } else {

                        while ($res = mysql_fetch_assoc($exequery)) {
                            echo '<tr>';
                            echo '<td><a href="exibirVideos.php?id=' . $res['id'] . '">' . $res['titulo'] . '</a></td>';
                            echo '<td><a class ="btn btn-success" href="editarVideo.php?id=' . $res['id'] . '">Editar</a></td>';
                            echo '<td><a class ="btn btn-danger" href="listarVideo.php?del=' . $res['id'] . '">Excluir</a><br></td>';
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
    $querydel = "DELETE FROM video WHERE id = '$delid'";// query para eliminar do banco
    $exeqrrdel = mysql_query($querydel) or die;//executa a query
    if($exeqrrdel){
        echo '<script>alert("Vídeo excluído com sucesso!");</script>';
    }
}
?>