<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Artista Plastico</title>
        <link type="text/css" rel="stylesheet" href="CSS/styleIndex.css">
        <script type="text/javascript" src="js/modal.js"></script>
    </head>
    <body>
       <?php include 'confirmacaoUsuario.php';
        //include 'header.php';
       include 'conexao.php'?>

<h1>Página do Usuário</h1>
<p>Olá, <?php include 'mostraLogado.php';?>!</p>
<br>
<p>você é usuário deste site!</p>
<?php               
         
                   
                    $query = "SELECT * FROM pessoa WHERE nomeUsuario = '".$_SESSION['nomeUsuario']."'";
                    $exequery = mysql_query($query) or die(mysql_error());

                 $res = mysql_fetch_assoc($exequery);
                            
                
                            echo '<td><a href="alterarSenha.php?id=' . $res['id'] . '">Alterar Senha</a></td>';
                            
                 
                        
                
                    ?>
    </body>
</html>


