<?php
class Pessoa
{
    public $cabelo;
    public $cor_olhos;
    public $altura;
    public $cor_pele;
    public $nome;

    function __construct($cabelo, $olhos, $altura, $cor_pele, $nome)
    {
        $this->cabelo = $cabelo;
        $this->cor_olhos = $olhos;
        $this->altura = $altura;
        $this->cor_pele = $cor_pele;
        $this->nome = $nome;
        
       ;
    }
    function apresentar_pessoa()
    {
        echo "
        <br>Dados da Pessoa:
        <br>Nome: $this->nome
        <br>Altura: $this->altura
        <br>Tipo de cabelo: $this->cabelo
        <br>Cor da pele: $this->cor_pele
        <br>Cor dos olhos: $this->cor_olhos
        ";
    }
   
}
// Criando o primeiro objeto da classe Pessoa

$pessoa = new Pessoa("Tranças", "Castanhos", 1.78, "Negra","Ana Priscila");
$pessoa1 = new Pessoa("Cacheado", "Castanhos", 1.68, "Parda","Ana Clara");
$pessoa2 = new Pessoa("Liso", "Castanhos", 1.65, "Branca","Fabio");
//usando o método apresentar_pessoa para mostrar os dados da pessoa
$pessoa->apresentar_pessoa();
echo "<br><br>";
$pessoa1->apresentar_pessoa();
echo "<br><br>";
$pessoa2->apresentar_pessoa();
