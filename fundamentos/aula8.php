<?php
//$nome = "Priscila";
//echo "<p>Olá, $nome!</p>";
//$idade = 40;
//echo "<p>Tenho $idade anos.</p>";

// quando usamos aspas duplas, o PHP interpreta o conteúdo dentro das aspas
//$nascimento = $_GET["nascimento"];
//$dataFormatada = date("d/m/Y", strtotime($nascimento));
//função para mudar o formato da data

function apresentar(){
$data = date("d/m/Y", strtotime($_GET["nascimento"]));
echo '<p>Olá, '. $_GET["nome"] . '!</p>';
echo '<p>Data de Nascimento:' . $data . '</p>';
echo '<p>Email: ' . $_GET["email"] . '</p>';
echo '<p>Telefone: ' . $_GET["telefone"] . '</p>';
echo '<p>Bairro: ' . $_GET["bairro"] . '</p>';
}

apresentar();
echo "Só para reforçar!!<br>";
apresentar();
?>