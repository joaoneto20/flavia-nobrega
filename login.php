<?php

session_start();
?>
<?php

require 'conexao.php';

function tratar($str) {

    $str = preg_replace(sql_regcase("/(\n|\r|%0a|%0d|Content-Type:|bcc:|to:|cc:|Autoreply:|from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/"), "", $str);
    
    $retorno = trim($str);
    
    $retorno = strip_tags($str);
    
    $retorno = addslashes($str);  

    return $retorno;
}

$nomeUsuario = isset($_POST["nomeUsuario"]) ? tratar($_POST["nomeUsuario"]) : "0";
$senha = md5($_POST["senha"]);
$sql = ("select * from pessoa where nomeUsuario = '$nomeUsuario' and senha = '$senha'");
$query = mysql_query($sql);

if (eregi('[^a-zA-Z0-9_]', $nomeUsuario)) {

    die('Usuário Inválido');
} else if ($resultado = mysql_fetch_assoc($query)) {

    $_SESSION['nomeUsuario'] = $resultado["nomeUsuario"];
    $_SESSION['senha'] = $resultado["senha"];
    $_SESSION['nome'] = $resultado["nome"];
    $_SESSION['categoria'] = $resultado["categoria"];
} else {
    session_destroy();
    echo "Usuário ou Senha inválidos";
}

if ($_SESSION['categoria'] == 1) {
    header("location: indexAdmin.php");
} else if ($_SESSION['categoria'] == 2) {
    header("location: indexUsuario.php");
} else {
    header("Location: erro.php");
}
?>