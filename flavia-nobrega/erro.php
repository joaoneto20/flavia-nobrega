<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ERRO</title>
        <link type="text/css" rel="stylesheet" href="CSS/styleIndex.css">
        <script type="text/javascript" src="js/modal.js"></script>
    </head>
    <body>
        <p>Não Foi possível Logar.</p><br/>
        
        <p>Tente Novamente</p><br/>

	<a href="#" onclick="showBox()">Abrir Modal</a>
	<div id="box" class="dialog">
		<div>

			<label>Login</label><br><br>
		<form action="login.php" method="POST">
			<label>Usuário: </label>
			<input type="text"><br>
			<label>Senha: </label>
			<input type="text"><br>
			<input type="submit" value="Logar">
		</form>
			
			<a href="#" onclick="showBox()">fechar</a>

		</div>

	</div>
    </body>
</html>
