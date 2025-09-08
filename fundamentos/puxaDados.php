<?php
// conexão com o banco de dados
$servidor = "localhost";
$user_banco = "root";
$senha_banco = "";
$banco = "senac";

$conexao = new mysqli($servidor, $user_banco, $senha_banco, $banco);  


//executar o comando para listar
$listar = "SELECT * FROM alunos";
$listarexec = $conexao->query($listar);

if ($listarexec->num_rows > 0) {
    //mostrar os dados de cada linha
    while ($linha = $listarexec->fetch_assoc()) {
        echo "<br>" . $linha["nome"] . " | " . $linha["curso"];
    }
    
   } else {
    echo "<br>Dados não encontrados";
}






?>