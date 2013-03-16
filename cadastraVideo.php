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
<div class="container-fluid">
    <div class="row-fluid">
            <div class="well" style="max-width: 280px; margin: auto; ">                
                <h2>Adicionar Vídeo</h2>
<form method="POST" action="#">
    <label>Título:</label>
    <input class="input-large" type="text" name="titulo" placeholder="Digite um Titulo">
    <label>Link do vídeo:</label>
    <input class="input-large" type="text" name="endereco" placeholder="Cole o link do vídeo">
    <label>Descrição:</label>
    <textarea name="descricao" cols="100" rows="5" placeholder="Digite Uma descrição"></textarea><br>
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
<?php
require 'footerAdm.php';
?>