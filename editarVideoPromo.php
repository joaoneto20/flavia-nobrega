<?php
require 'headerAdm.php';
require 'menuAdm.php';
require 'conexao.php';
?>
<hr>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="well" style="max-width: 280px; margin: auto; ">                
            <h2>Edição de Vídeo</h2>

                <?php
                //Listar o formulário com os dados preenchidos #######
                $uid = mysql_real_escape_string($_GET['id']); //pega o id do objeto
                $query = "SELECT * FROM promocao WHERE id= '$uid'"; //busca no banco de dados
                $exeqr = mysql_query($query) or die(mysql_error());

                if (mysql_num_rows($exeqr) <= 0) {
                    reader('listarVideosPromo.php');
                }

                $res = mysql_fetch_assoc($exeqr);
                echo $res['titulo'];
                echo '<form action="#" method="POST">';
                echo '<label>Título:</label>';
                echo '<input class="input-large" type="text" name="titulo" value="' . $res['titulo'] . '"><br>';
                echo '<label>Link do vídeo:</label>';
                echo '<input class="input-large" type="text" name="endereco" value="' . htmlspecialchars($res['endereco']) . '"><br>';
                echo '<label>Descrição:</label>';
                echo '<textarea cols="100" rows="5" name="descricao" > ' . $res['descricao'] . ' </textarea>';
                    if ($res['status']==1) {
                        $set_checked = "CHECKED";
                        echo '<label class="radio">';
                        echo '<input type="radio" name="status" id="optionsRadios1" value=' . $res['status'] . ' '.$set_checked .' >Ativo';
                        echo '</label>';
                        echo '<label class="radio">';
                        echo '<input type="radio" name="status" id="optionsRadios2" value="0" >Inativo';
                        echo '</label>';
                    }else{
                        $set_checked = "CHECKED";
                        echo '<label class="radio">';
                        echo '<input type="radio" name="status" id="optionsRadios1" value="1" >Ativo';
                        echo '</label>';
                        echo '<label class="radio">';
                        echo '<input type="radio" name="status" id="optionsRadios2" value=' . $res['status'] . ' '.$set_checked .' >Inativo';
                        echo '</label>';
                    }
                echo '<input class="btn btn-success" type="submit" name="enviar" value="Editar"><br>';
                echo '</form>';

                //atualizar no banco ############
                if (isset($_POST['enviar'])) {
                    $titulo = $_POST["titulo"];
                    $endereco = addslashes($_POST["endereco"]);
                    $descricao = $_POST["descricao"];
                    $status = $_POST["status"];

                    $qrr = "UPDATE promocao SET titulo = '$titulo', endereco = '$endereco', descricao = '$descricao', status = '$status' WHERE id = '$uid'";
                    $exe = mysql_query($qrr) or die(mysql_error());
                    echo "<script type='text/javascript'> 
                                    alert('Edição realizada com sucesso.'); 
                                    </script>";
                }
                ?>
            <a href="listarVideosPromo.php" class="btn btn-info" style="text-align: center;">Voltar</a>
        </div>
    </div>
</div>
<?php
require 'footerAdm.php';
?>
