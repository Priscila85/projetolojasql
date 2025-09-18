<?php

//conexão com o banco de dados
$servidor = "localhost";
$user_banco = "root";
$senha_banco = "";
$banco = "senac";
$conexao = new mysqli($servidor, $user_banco, $senha_banco, $banco); 
//capitando dados do formulário de login
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

//executa a consulta no banco de dados(SQL QUERY)
$consulta = "SELECT * FROM login WHERE usuario = '$usuario' AND senha = '$senha'";
$executa = $conexao->query($consulta);

//verifica se encontrou algum registro
if ($executa->num_rows) {
    echo "<br>Usuario logado no sistema";
    echo "<br>Seja bem vindo, $usuario";
} else {
    echo "<br>Usuário ou senha incorretos.";
}



?>
