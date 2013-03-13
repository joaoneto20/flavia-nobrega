<?php
require 'headerAdm.php';
require 'menuAdm.php';
?>
<hr>
<div class="container">
    <div class="row">
        <div class="span9">
            <div class="hero-unit">
<h2>Adicionar Imagem</h2>

<form method="POST" action="" enctype="multipart/form-data">
    Arquivo:<br>
    <input type="file" name="imagem">
    <br>
    <input type="submit" value="Enviar" name="enviei"/>
</form>

<?php
require 'conexao.php';

	if(isset($_POST['enviei'])){
		$pasta = 'imagem-fotos';
		$permite = array('image/jpg','image/jpeg','image/pjpeg');
		
		$imagem = $_FILES['imagem'];
		$destino = $imagem['tmp_name'];
		$nome = md5($imagem['name']);
		$tipo = $imagem['type'];
		
		require('uploadImagem.php');
		
		if(!empty($nome) && in_array($tipo, $permite)){
			upload($destino, $nome, 620, $pasta);
                        $sql = "INSERT INTO imagem(nome) VALUES ('$nome')";
    
                        $query = mysql_query($sql) or die (mysql_error());
                        echo '<script>alert("Enviado com sucesso!");</script>';
		}else{
			echo "Aceitamos apensa imagens no formato JPEG";
		}
	}
?>
            </div>
        </div>
    </div>
</div>
<?php
require 'footerAdm.php';
?>