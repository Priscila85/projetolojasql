<?php
// Receber as variáveis via método GET
$data = date("d/m/Y", strtotime($_GET["nascimento"]));
$nome = $_GET["nome"];
$telefone = $_GET["telefone"];
$email = $_GET["email"];
$nascimento = $_GET["nascimento"];
$endereco = $_GET["endereco"];

//Apresentar os dados
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apresentação dos Dados</title>

</head>
<body>
    <h1>Apresentação dos Dados</h1>
    <p>Nome: <?php echo $nome; ?></p>
    <p>Telefone:<?php echo $telefone;?></p>
    <p>Email:<?php echo $email;?></p>
    <p>Data de Nascimento:<?php echo $data;?></p>
    <p>Endereço:<?php echo $endereco;?> </p>    
    
</body>
</html>