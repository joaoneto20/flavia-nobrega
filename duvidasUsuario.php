<?php
require 'headerUsuario.php';
require 'menuUsuario.php';
require 'conexao.php';
?>
<hr>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="well" style="max-width: 300px; margin: auto; ">                
            <h2>Dúvidas</h2>
            <p>
                Espaço destinado a esclarecer dúvidas sobre a aula.
            </p>
            <?php
            $uid = mysql_real_escape_string($_SESSION['nome']); //pega o id do objeto
            $query = "SELECT * FROM pessoa WHERE nome = '$uid'"; //busca no banco de dados
            $exeqr = mysql_query($query) or die(mysql_error());

            if (mysql_num_rows($exeqr) <= 0) {
                reader('indexUsuario.php');
            }

            $res = mysql_fetch_assoc($exeqr);

            echo '
                    <form action="envioDuvidas.php" method="POST">
                        <label>Nome:</label>
                        <input type="text" class="disabledInput" name="nome" disabled value="' . $res['nome'] . '">
                        <label>E-mail:</label>
                        <input type="text" class="disabledInput" name="email" value="' . $res['email'] . '">
                        <label>Assunto:</label>
                        <textarea rows="5" name="duvidas" placeholder="Digite aqui suas dúvidas"></textarea><br>
                        <input class="btn btn-success" type="submit" name="enviar" value="Enviar"><br>
                    </form>
                    ';
            ?>
            <a href="indexUsuario.php" class="btn btn-info" style="text-align: center;">Voltar</a>                            
        </div>
    </div>
</div>
<?php
require 'footerUsuario.php';
?>
