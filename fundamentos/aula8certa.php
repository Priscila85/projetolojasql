<?php
class Camisa
{
    public $cor;
    public $tamanho;
    public $produto;
    public $carrinho;
    public $preco;
    public $quantidade;

    function __construct($cor, $tamanho, $produto, $carrinho, $preco, $quantidade)
    {
        $this->cor = $cor;
        $this->tamanho = $tamanho;
        $this->produto = $produto;
        $this->carrinho = $carrinho; 
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }
    function apresentar_camisa()
    {
        echo "
        <br>A camisa escolhida é:
        <br>Cor: $this->cor
        <br>Tamanho: $this->tamanho
        <br>Produto: $this->produto
        <br>Carrinho: $this->carrinho
        <br>Preço: R$ $this->preco
        <br>Quantidade: $this->quantidade
        ";
    }
}
$camisa = new Camisa("Preta", "M", "Camiseta Polo", "Sim", 79.90, 1);
$camisa->apresentar_camisa();


?>