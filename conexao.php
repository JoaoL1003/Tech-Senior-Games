<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "biblioteca_jogos";

// Criar a conexão
$conexao = new mysqli($servidor, $usuario, $senha, $banco);

// Verificar a conexão
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}
?>
