<?php
require 'headerAdm.php';
require 'menuAdm.php';
?>
<hr>
<div class="container-fluid">
    <div class="row-fluid">
            <div class="well" style="max-width: 300px; margin: auto; ">                
                <h2>Adicionar Usuários</h2>
                
                <form action="cadastroUsuario.php" method="POST">

                    <label>Nome: </label>
                    <input type="text" name="nome"><br>
                    <label>Nome de Usuário: </label>
                    <input type="text" name="nomeUsuario"><br>
                    <label>E-Mail: </label>
                    <input type="text" name="email"><br>
                    <label>Senha: </label>
                    <input type="password" name="senha"><br>
                    <input class="btn btn-primary" type="submit" name="enviar" value="Cadastrar"><br>
                </form>
            </div>
    </div>
</div>
<?php
require 'footerAdm.php';
?>
