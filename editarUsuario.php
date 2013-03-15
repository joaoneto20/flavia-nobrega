<?php
require 'headerAdm.php';
require 'menuAdm.php';
require 'conexao.php';
?>
<hr>
<div class="container">
    <div class="row">
            <div class="well" style="max-width: 300px; margin: auto; ">                
                <h2>Edição de Usuários</h2>

                <tbody>

                    <?php
                            
                    
                    //Listar o formulário com os dados preenchidos #######
                            $uid = mysql_real_escape_string($_GET['id']);//pega o id do objeto
                            $query = "SELECT * FROM pessoa WHERE id= '$uid'";//busca no banco de dados
                            $exeqr = mysql_query($query) or die (mysql_error());

                            if(mysql_num_rows($exeqr)<=0){
                                reader('listarUsuaio.php');
                            }

                            $res = mysql_fetch_assoc($exeqr);
                            echo $res['nome'];
                            echo '                            
                            <form action="#" method="POST">
                            <label>Nome: </label>
                             <input type="text" name="nome" value="' . $res['nome'] . '"><br>
                            <label>Nome de Usuário: </label>
                            <input type="text" name="nomeUsuario" value="' . $res['nomeUsuario'] . '"><br>
                            <label>E-Mail: </label>
                             <input type="text" name="email" value="' . $res['email'] . '"><br>
                            <input class="btn btn-primary" type="submit" name="enviar" value="Cadastrar"><br>
                            </form>
                            ';
                            
                            //atualizar no banco ############
                            if(isset($_POST['enviar'])){
                                $nome            = $_POST["nome"];
                                $nomeUsuario     = $_POST["nomeUsuario"];
                                $email           = $_POST["email"];
                                
                             $qrr = "UPDATE pessoa SET nome = '$nome', nomeUsuario = '$nomeUsuario', email = '$email' WHERE id = '$uid'";
                             $exe = mysql_query($qrr) or die (mysql_error());
                                    echo "<script type='text/javascript'> 
                                    alert('Edição realizada com sucesso.'); 
                                    </script>";
                             
                             
                            }

                    ?>
                
                </tbody>
                
            </div>
    </div>
</div>
<?php
require 'footerAdm.php';
?>
