<?php
$host = "localhost";
$database = "golpe";
$usuario = "root";
$senha = "";

$conexao = new mysqli($host, $usuario, $senha, $database);
if ($conexao->connect_errno) {
    echo "falha ao conectar";
}else{
    echo"";
}
?>
