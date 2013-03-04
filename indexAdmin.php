<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Artista Plastico</title>
        <link type="text/css" rel="stylesheet" href="CSS/styleIndex.css">
        <script type="text/javascript" src="js/modal.js"></script>
    </head>
    <body>
       <?php include 'confirmacaoAdmin.php';
        //include 'header.php'; ?>

<h1>Página restrita</h1>
<p>Olá, <?php include 'mostraLogado.php';?>!</p>
<br>
<p>você é administrador(a) deste site!</p>
<br>
<a href="cadastraVideo.php">Cadastrar Video</a><br>
<a href="#" onclick="showBox()">Clique aqui</a> para cadastrar um usuário.
<div id="box" class="dialog">
		<div>

		<label>Login</label><br><br>
		<form action="cadastroUsuario.php" method="POST">
                    
                        <label>Nome: </label>
			<input type="text" name="nome"><br>
			<label>Nome de Usuário: </label>
			<input type="text" name="nomeUsuario"><br>
			<label>E-Mail: </label>
			<input type="text" name="email"><br>
			<label>Senha: </label>
			<input type="password" name="senha"><br>
			<input type="submit" name="enviar" value="Cadastrar"><br>
		</form>
			
			<a href="#" onclick="showBox()">fechar</a>

		</div>

	</div>

    </body>
</html>


