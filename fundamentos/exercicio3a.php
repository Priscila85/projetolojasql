<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>

<body>
    <h1>Apenas um exercício</h1>
    <?php
    $nome = ["Marcio", "Ana", "Gennifer"];
    $nome_procurado = "Marcio"; // Nome que queremos verificar se já existe no array
    echo "<h2>Dados Cadastrais</h2>";
// count() é uma função que retorna o número de elementos em um array
    for ($x = 0; $x < count($nome); $x++) {
        echo "<p>Nome:$nome[$x]</p>";
        if (in_array($nome_procurado, $nome)) {
            echo "<span> (Já tem Experiencia) </span>";
        }
    }
    ?>

</body>

</html>