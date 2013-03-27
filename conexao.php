<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "artista";

$banco = mysql_connect($host, $usuario, $senha) //conexão com o servidor
        or die("Não foi possível fazer a conexão com o servidor");

mysql_select_db($bd, $banco) //informar qual o nome do banco para fazer conexão
        or die("Não foi possível encontrar o banco especificado");
?>