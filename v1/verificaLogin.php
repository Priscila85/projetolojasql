<?php

//conexão com o banco de dados
$servidor = "localhost";
$user_banco = "root";
$senha_banco = "";
$banco = "projetoloja";

$conexao = new mysqli($servidor, $user_banco, $senha_banco, $banco); 
//capitando dados do formulário de login
$usuario = $_POST['nome']; // campo do formulário
$senha = $_POST['senha'];

//executa a consulta no banco de dados(SQL QUERY)
$consulta = "SELECT * FROM login WHERE usuario = '$usuario' AND senha = '$senha'";
$executa = $conexao->query($consulta);

//verifica se encontrou algum registro
if ($executa->num_rows > 0) {
    echo "Usuário logado no sistema!<br>";
    echo "Seja bem-vindo, $usuario";
} else {
    echo "Usuário ou senha incorretos.";
}



?>