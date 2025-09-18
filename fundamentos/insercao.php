<?php
//conexão com o banco de dados

$servidor = "localhost";
$user_banco = "root";
$senha_banco = "";
$banco = "senac";
$conexao = new mysqli($servidor, $user_banco, $senha_banco, $banco);  
//verifica se houve erro na conexão, conexão deu certo

if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
} else {
    echo "<h2>Conexão realizada com sucesso!<h2><br>";
}

//inserção de dados no banco de dados
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$inserir = "INSERT INTO login VALUES (DEFAULT, '$usuario', '$senha')";

$nome = $_POST['nome'];
$curso = $_POST['curso'];
$inserir2 = "INSERT INTO alunos VALUES (DEFAULT, '$nome', '$curso')";
//executa o comando sql
$conexao->query($inserir);
$conexao->query($inserir2);
echo "<h2>Dados inseridos com sucesso!<h2><br>";


?>
