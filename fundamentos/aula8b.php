<?php
// Definição da classe Cachorro
class Cachorro {
    // Propriedades (atributos) da classe
    public $nome;
    public $raca;
   
    // Construtor da classe: executado automaticamente quando criamos um novo objeto
    function __construct($nome, $raca) {
        $this->nome = $nome; // 'this' se refere ao próprio objeto, e atribui o valor ao atributo nome
        $this->raca = $raca; // atribui o valor ao atributo raca
    }

    // Método (função dentro da classe) que faz o cachorro "latir"
    function latir() {
        echo "Au Au!";
    }
}

// Criando o primeiro objeto da classe Cachorro
$cachorro = new Cachorro("Marcelo", "Vira-lata");

// Exibindo os atributos do objeto
echo "<br>Nome: ";
echo $cachorro->nome;
echo "<br>Raça: ";
echo $cachorro->raca;
echo "<br>";

// Chamando o método latir() para esse cachorro
$cachorro->latir();

// Criando o segundo objeto da classe Cachorro
$cachorro1 = new Cachorro("Tupi", "Boiadeiro Australiano");

// Exibindo o nome do segundo cachorro
echo "<br>Nome: ";
echo $cachorro1->nome;

// Chamando o método latir() para o segundo cachorro
$cachorro1->latir();

?>
