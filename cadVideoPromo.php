<?php
require 'headerAdm.php';
require 'menuAdm.php';
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
                <textarea name="descricao" cols="100" rows="5" placeholder="Digite Uma descrição"></textarea>
                <label class="radio">
                    <input type="radio" name="status" id="optionsRadios1" value="1" checked >Ativo
                </label>
                <label class="radio">
                    <input type="radio" name="status" id="optionsRadios2" value="0" >Inativo
                </label>
                <input  class="btn btn-primary" type="submit" value="Cadastrar" name="send"/>
            </form>
        </div>
    </div>
</div>
<?php
require 'conexao.php';

if (isset($_POST['send'])) {//verifica se o botão foi setado
    //$titulo = HTMLSPECIALCHARS(mysql_real_escape_string($_POST["titulo"]));
    //$endereco = HTMLSPECIALCHARS(mysql_real_escape_string($_POST["endereco"]));
    //$descricao = HTMLSPECIALCHARS(mysql_real_escape_string(nl2br($_POST["descricao"])));
    $titulo = $_POST["titulo"];
    $endereco = addslashes($_POST["endereco"]);
    $descricao = $_POST["descricao"];
    $status = $_POST["status"];

    $sql = "INSERT INTO promocao(titulo, endereco, descricao, status) VALUES ('$titulo','$endereco','$descricao', $status)";

    $query = mysql_query($sql) or die(mysql_error());
    echo "<script type='text/javascript'> 
    alert('Cadastro realizado com sucesso.'); 
    </script>";
    echo "<script language = 'javascript'> location.href = 'cadVideoPromo.php'; </script>";
}
?>
<?php
require 'footerAdm.php';
?>