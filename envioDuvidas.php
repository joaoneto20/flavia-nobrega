<?php
require 'conexao.php';
require 'config.php';
if (isset($_POST['enviar'])) {
                $nome = $_POST["nome"];
                $email = $_POST["email"];
                $duvida = $_POST["duvidas"];
                $remetente = 'flavia@flavianobrega.com';
                $nomeRemetente = 'Duvidas Video-Aulas';
                
                sendMail('Dúvidas sobre a aula', $duvida, $remetente, $nomeRemetente, $email, $nome);
                echo "<script type='text/javascript'> 
                                    alert('Obrigado por perguntar! Logo entraremos em contato.'); 
                                    </script>";
                
            }
?>