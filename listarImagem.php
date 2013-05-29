<?php
require 'headerAdm.php';
require 'menuAdm.php';
?>
<hr>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span9">
            <h3 style="text-align: center;">Relação de Imagens cadastradas</h3>
            <table class="table table-hover table-bordered" style="max-width: 500px;">
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
                        echo '<td style="text-align: left;"><a href="exibirImagem.php?id=' . $res['id'] . '">' . HTMLSPECIALCHARS(mysql_real_escape_string($res["titulo"])) . '</a></td>';
                        echo '<td style="text-align: center;"><a class ="btn btn-success" href="editarImagem.php?id=' . $res['id'] . '">Editar</a>&nbsp;';
                        echo '<a class ="btn btn-danger" href="listarImagem.php?del=' . $res['id'] . '">Excluir</a><br></td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
            <div class="pagination pagination-centered">
                <?php include 'paginacao.php'; ?>
            </div>
        </div>
    </div>
</div>
<?php
require 'footerAdm.php';
?>
<?php
//###### excluir do banco ########

if (!empty($_GET['del'])) {
    $delid = $_GET['del']; //pega o id do usuário a ser excluido
    $querydel = "DELETE FROM imagem WHERE id = '$delid'"; // query para eliminar do banco
    $exeqrrdel = mysql_query($querydel) or die; //executa a query
    if ($exeqrrdel) {
        echo '<script>alert("Imagem excluída com sucesso!");</script>';
        echo "<script language = 'javascript'> location.href = 'listarImagem.php'; </script>";
    }
}
?>