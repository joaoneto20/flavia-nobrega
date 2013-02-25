<?php
include ('conexao.php');
$nome            = $_POST["nome"];
$nomeUsuario     = $_POST["nomeUsuario"];
$email           = $_POST["email"];
$senha           = $_POST["senha"];

if (strstr($email, '@') != true)
{
	echo "E-mail inválido";
}

else {
	// função que grava os dados no banco de dados
	$sql = "INSERT INTO pessoa(nome, nomeUsuario, email, senha)
		   VALUES ('$nome', '$nomeUsuario', '$email', '$senha')"; 

	$query = mysql_query($sql) or die (mysql_error());
	
	
   echo  "<script type='text/javascript'> 
alert('Cadastro realizado com sucesso.'); 
</script>"; 
   
   header('Location: indexAdmin.php');
       

}

require 'config.php';
sendMail('Teste envio de e-mail no cadastro',
        "AGORA INFORMANDO O USUÁRIO E SENHA AUTOMATICAMENTE!!<br><br>Cadastro Realizado com sucesso.
            Segue abaixo seu usuário e senha.<br><br>Usuario: $nomeUsuario <br> Senha: $senha<br>",
        'joaoneto20@gmail.com','João Neto',$email,$nome);

?>