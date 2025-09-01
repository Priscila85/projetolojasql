<?php
class Cachorro {
    public $nome;
    public $raca;
   
    function __construct($nome, $raca) {
        $this->nome = $nome;
        $this->raca = $raca;
    }

    function latir() {
        echo "Au Au!";
    }

    

}
$cachorro = new Cachorro("Marcelo", "Vira-lata");

echo "<br>Nome: ";
echo $cachorro->nome;
echo "<br>Raça: ";
echo $cachorro->raca;
echo "<br>";
$cachorro->latir();

$cachorro1 = new Cachorro("Tupi", "Boiadeiro Australiano");
echo "<br>Nome: ";
echo $cachorro1->nome;
$cachorro1->latir();



?>