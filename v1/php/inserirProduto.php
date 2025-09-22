<?php
require("conexao.php"); // inclui a conexão com o banco
$nome_produto   = $_POST['nome_produto'];
$qtd_estoque    = $_POST['qtd_estoque'];
$preco          = $_POST['preco_unitario'];
$tamanho        = $_POST['tamanho'];
$caminho_imagem = $_POST['imagem'];

    //Inserir dados no banco

    $sql = "INSERT INTO produtos VALUES ('$nome_produto', $qtd_estoque, $preco, '$tamanho', '$caminho_imagem')";
    
    echo "Produto cadastrado com sucesso!";