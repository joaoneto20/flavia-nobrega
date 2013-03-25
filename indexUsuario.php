<<<<<<< HEAD
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


=======
<?php
require 'headerUsuario.php';
require 'menuUsuario.php';
require 'conexao.php';
?>
<hr>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span9" style="margin-left: 30%; object-position: center;">
            <h2>Bem vindo!</h2>
            <image src="images/gallery_images/logoPainel.png">
        </div>
    </div>
</div>
<?php
require 'footerUsuario.php';
?>
>>>>>>> 5a0f2ac55f4bb02e98e845b5bf5d116518502d34
