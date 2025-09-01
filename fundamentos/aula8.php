<?php
// Aula 8 - programação orientada a objetos - parte 1
// Modelo do meu objeto
class Garrafa{
    // Atributos(características)
    public $cor;
    public $tipo_material;
    public $volume;
    public $tipo_liquido;


    // Método(ação)
    function __construct($cor, $tipo_material, $volume, $tipo_liquido){
        $this->cor = $cor;
        $this->tipo_material = $tipo_material;
        $this->volume = $volume;
        $this->tipo_liquido = $tipo_liquido;
       }
    
    function status_tampado($tampa){
        if($tampa == true){
            echo "A garrafa está tampada";
        } else {
            echo "A garrafa está destampada";
        }
    }   

    function apresentar_garrafa(){
        echo "A garrafa é: <br>";
        echo "
        <br>Cor: $this->cor
        <br>Tipo de Material: $this->tipo_material
        <br>Volume: $this->volume
        <br>Tipo de Líquido: $this->tipo_liquido
        ";
    }
}

$nome ="Marcio";
$idade = 40;
$garrafa = new Garrafa("Azul", "Inox", 510, "Água"); 

echo "Nome: $nome <br>";

$garrafa->apresentar_garrafa();

echo "<br>O status da garrafa é: ";
echo $garrafa->status_tampado(true);

$copo = new Garrafa("Transparente", "Vidro", 150, "Cerveja");
$copo->apresentar_garrafa();

echo "<br>Cor do copo é: ";
echo $copo->cor;

?>