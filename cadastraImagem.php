<?php
require 'headerAdm.php';
require 'menuAdm.php';
?>
<hr>
<div class="container-fluid">
    <div class="well" style="max-width: 400px; margin: auto; ">
        <h2>Adicionar Imagem</h2>

        <form method="POST" action="" enctype="multipart/form-data">
            <label>Arquivo:</label>
            <input type="file" name="imagem">
            <label>Título:</label>
            <input type="text" name="titulo">
            <br>
            <input type="submit"  class="btn btn-primary" value="Enviar" name="enviei"/>
        </form>

        <?php
        require 'conexao.php';

        if (isset($_POST['enviei'])) {
            $pasta = 'imagem-fotos';
            $permite = array('image/jpg', 'image/jpeg', 'image/pjpeg');

            $imagem = $_FILES['imagem'];
            $destino = $imagem['tmp_name'];
            $nome = $imagem['name'];
            $tipo = $imagem['type'];
            $titulo = $_POST['titulo'];

            require('uploadImagem.php');

            if (!empty($nome) && in_array($tipo, $permite)) {
                upload($destino, $nome, 720, $pasta);
                $sql = "INSERT INTO imagem(nome,titulo) VALUES ('$nome','$titulo')";

                $query = mysql_query($sql) or die(mysql_error());
                echo '<script>alert("Enviado com sucesso!");</script>';
            } else {
                echo "Aceitamos apensa imagens no formato JPEG";
            }
        }
        ?>
    </div>
</div>
<?php
require 'footerAdm.php';
?>