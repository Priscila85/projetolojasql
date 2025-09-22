<?php
require("conexao.php"); // inclui a conexão com o banco
$nome_produto   = $_POST['nome_produto'];
$qtd_estoque    = $_POST['qtd_estoque'];
$preco          = $_POST['preco_unitario'];
$tamanho        = $_POST['tamanho'];
$caminho_imagem = $_POST['imagem'];

    //Inserir dados no banco
$sql = "INSERT INTO produtos(nome_produto, qtd_estoque, preco_unitario, tamanho, imagem) VALUES ('$nome_produto', $qtd_estoque, $preco, '$tamanho', '$caminho_imagem')";
$conexao->query($sql);
    
echo "Produto cadastrado com sucesso!";