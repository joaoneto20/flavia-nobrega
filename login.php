          <?php
            require_once 'conexao.php';

            $nomeUsuario = $_POST["nomeUsuario"];
            $senha = md5($_POST["senha"]);

            $sql = ("select * from pessoa where nomeUsuario = '$nomeUsuario' and senha = '$senha'");

            $query = mysql_query($sql);

            if ($resultado = mysql_fetch_assoc($query)) {

                session_start();
                $_SESSION['nomeUsuario'] = $resultado["nomeUsuario"];
                $_SESSION['senha'] = $resultado["senha"];
                $_SESSION['nome'] = $resultado["nome"];
                $_SESSION['categoria'] = $resultado["categoria"];

                //Header("Location: usuario.php"); 
            }

            if ($_SESSION['categoria'] == 1) {
                header("location: indexAdmin.php");
            } else if ($_SESSION['categoria'] == 2) {
                header("location: indexUsuario.php");
            } else {
                header("Location: erro.php");
            }
            ?>
