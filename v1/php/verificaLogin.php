<?php
//inicializa a sessão
session_start(); // Inicia a sessão para armazenar informações do usuário

require('conexao.php'); // vai buscar o arquivo de conexão com o banco de dados

//os dados abaixo vieram do form html
//capitando dados do formulário de login
$usuario = $_POST['nome']; // campo do formulário
$senha = $_POST['senha'];

$_SESSION['nome'] = $usuario; // Armazena o nome do usuário na sessão

//executa a consulta no banco de dados(SQL QUERY)
//Aqui você está guardando em uma variável chamada $sql uma instrução SQL.
//SELECT * significa "selecionar todos os campos".
//FROM login significa "da tabela chamada login".
//Ou seja: vai buscar todas as linhas e todas as colunas da tabela login.

$sql = "SELECT * FROM login WHERE usuario = '$usuario' AND senha = '$senha'";
$procurar = $conexao->query($sql);

//verifica se encontrou algum registro
if ($procurar->num_rows > 0) {
    //caso o usuario e senha estejam corretos
    //ele vai direcionar para a página 'admin.html'
   header("Location: admin.php");
} else {
    //caso o usuario e senha estejam incorretos
    //ele vai informar que o usuário não existe
    echo "Usuário ou senha incorretos.";
    echo "<br><a href='../index.html'>Voltar</a>";
}

?>