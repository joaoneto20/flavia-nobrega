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
                $query = "SELECT * FROM video WHERE id= '$uid'"; //busca no banco de dados
                $exeqr = mysql_query($query) or die(mysql_error());

                if (mysql_num_rows($exeqr) <= 0) {
                    reader('listarVideos.php');
                }

                $res = mysql_fetch_assoc($exeqr);
                echo $res['titulo'];
                echo '                            
                            <form action="#" method="POST">
                            <label>Título:</label>
                            <input class="input-large" type="text" name="titulo" value="' . $res['titulo'] . '"><br>
                            <label>Link do vídeo:</label>
                            <input class="input-large" type="text" name="endereco" value="' . $res['endereco'] . '"><br>
                            <label>Descrição:</label>
                            <textarea cols="100" rows="5" name="descricao" value="' . $res['descricao'] . '"></textarea><br>
                            <input class="btn btn-success" type="submit" name="enviar" value="Editar"><br>
                            </form>
                            ';

                //atualizar no banco ############
                if (isset($_POST['enviar'])) {
                    $titulo = $_POST["titulo"];
                    $endereco = $_POST["endereco"];
                    $descricao = $_POST["descricao"];

                    $qrr = "UPDATE video SET titulo = '$titulo', endereco = '$endereco', descricao = '$descricao' WHERE id = '$uid'";
                    $exe = mysql_query($qrr) or die(mysql_error());
                    echo "<script type='text/javascript'> 
                                    alert('Edição realizada com sucesso.'); 
                                    </script>";
                }
                ?>
            <a href="listarVideos.php" class="btn" style="text-align: center;">Voltar</a>
        </div>
    </div>
</div>
<?php
require 'footerAdm.php';
?>
