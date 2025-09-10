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
   //tabela html para mostrar os dados
    echo "<table border='1'>";
    echo "
        <tr> 
            
                <th>Nome</th>
                <th>Curso</th>
            
        </tr>
        ";
    //mostrar os dados de cada linha $linha = $listarexec->fetch_assoc
    while ($linha = $listarexec->fetch_assoc()) {
        echo "<tr><td>" . $linha['nome'] . "</td><td>" . $linha['curso'] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "<br>Dados não encontrados";
}