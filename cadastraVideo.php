<?php
require 'headerAdm.php';
require 'menuAdm.php';
?>

<?php
    require 'conexao.php';
        
    if (isset($_POST['send'])){//verifica se o botão foi setado
    $titulo = HTMLSPECIALCHARS(mysql_real_escape_string($_POST["titulo"]));
    $endereco = HTMLSPECIALCHARS(mysql_real_escape_string($_POST["endereco"]));
    $descricao = HTMLSPECIALCHARS(mysql_real_escape_string(nl2br($_POST["descricao"])));
    
    $sql = "INSERT INTO video(titulo, endereco, descricao) VALUES ('$titulo','$endereco','$descricao')";
    
    $query = mysql_query($sql) or die (mysql_error());
	
	
   echo  "<script type='text/javascript'> 
    alert('Cadastro realizado com sucesso.'); 
    </script>";
}

?>
<hr>
<div class="container">
    <div class="row">
        <div class="span9">
            <div class="hero-unit">
                <h2>Adicionar Imagem</h2>
<form method="POST" action="#">
    <span>Título:</span>
    <br>
    <input class="input-large" type="text" name="titulo" placeholder="Digite um Titulo">
    <br>
    <span>Link do vídeo:</span>
    <br>
    <input class="input-large" type="text" name="endereco" placeholder="Cole o link do vídeo">
    <br>
    <span>Descrição:</span>
    <br>
    <textarea name="descricao" cols="25" rows="5" placeholder="Digite Uma descrição"></textarea><br>
    <br>
    <input  class="btn btn-primary" type="submit" value="Cadastrar" name="send"/>
    
</form>

<?php
    require 'conexao.php';
        
    if (isset($_POST['send'])){//verifica se o botão foi setado
    $titulo = HTMLSPECIALCHARS(mysql_real_escape_string($_POST['titulo']));
    $endereco = HTMLSPECIALCHARS(mysql_real_escape_string($_POST['endereco']));
    $descricao = HTMLSPECIALCHARS(mysql_real_escape_string(nl2br($_POST['descricao'])));
    
    $sql = "INSERT INTO video('titulo','endereco','descricao') VALUES ('$titulo','$endereco','$descricao')";
    
    $query = mysql_query($sql) or die (mysql_error());
	
	
   echo  "<script type='text/javascript'> 
    alert('Cadastro realizado com sucesso.'); 
    </script>";
}
?>
            </div>
        </div>
    </div>
</div>
<?php
require 'footerAdm.php';
?>