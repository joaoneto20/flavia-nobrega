<?php
require 'headerAdm.php';
require 'menuAdm.php';
require 'conexao.php';
?>
<hr>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="well" style="max-width: 280px; margin: auto; ">                
            <h2>Edição de Imagem</h2>

                <?php
                //Listar o formulário com os dados preenchidos #######
                $uid = mysql_real_escape_string($_GET['id']); //pega o id do objeto
                $query = "SELECT * FROM imagem WHERE id= '$uid'"; //busca no banco de dados
                $exeqr = mysql_query($query) or die(mysql_error());

                if (mysql_num_rows($exeqr) <= 0) {
                    reader('listarImagem.php');
                }

                $res = mysql_fetch_assoc($exeqr);
                echo $res['titulo'];
                echo '                            
                            <form action="#" method="POST">
                            <label>Título:</label>
                            <input class="input-large" type="text" name="titulo" value="' . $res['titulo'] . '"><br>
                            <input class="btn btn-success" type="submit" name="enviar" value="Editar"><br>
                            </form>
                            ';

                //atualizar no banco ############
                if (isset($_POST['enviar'])) {
                    $titulo = $_POST["titulo"];

                    $qrr = "UPDATE imagem SET titulo = '$titulo' WHERE id = '$uid'";
                    $exe = mysql_query($qrr) or die(mysql_error());
                    echo "<script type='text/javascript'> 
                                    alert('Edição realizada com sucesso.'); 
                                    </script>";
                }
                ?>
            <a href="listarImagem.php" class="btn btn-info" style="text-align: center;">Voltar</a>
        </div>
    </div>
</div>
<?php
require 'footerAdm.php';
?>
