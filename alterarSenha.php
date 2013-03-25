<?php
require 'headerUsuario.php';
require 'conexao.php';
?>
<hr>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="well" style="max-width: 300px; margin: auto; ">                
            <h2>Edição de Usuários</h2>
            <?php
            $uid = mysql_real_escape_string($_GET['id']); //pega o id do objeto
            $query = "SELECT * FROM pessoa WHERE id= '$uid'"; //busca no banco de dados
            $exeqr = mysql_query($query) or die(mysql_error());

            if (mysql_num_rows($exeqr) <= 0) {
                reader('indexUsuario.php');
            }

            $res = mysql_fetch_assoc($exeqr);

            echo '                            
                            <form action="#" method="POST">
                            <label>Nova senha: </label>
                             <input type="text" name="senha"><br>
                            <input class="btn btn-success" type="submit" name="enviar" value="Editar"><br>
                            </form>
                            ';

            //atualizar no banco ############
            if (isset($_POST['enviar'])) {
                $senha = md5($_POST["senha"]);

                $qrr = "UPDATE pessoa SET senha = '$senha' WHERE id = '$uid'";
                $exe = mysql_query($qrr) or die(mysql_error());
                if ($exe) {
                    echo "<script type='text/javascript'> 
                      alert('Senha alterada com sucesso.'); 
                      </script>";
                }
            }
            ?>
            <a href="listarUsuario.php" class="btn btn-info" style="text-align: center;">Voltar</a>                            
        </div>
    </div>
</div>
<?php
require 'footerAdm.php';
?>
