<?php
//incluir a classe Pessoa existente no arquivo aula8c.php

include ("aula8c.php");//importei a classe Pessoa


$pessoa = new Pessoa("Castanho", "Castanhos", 1.72, 84, "Marcio", "Branca", "PHP");

//apresentar a pessoa

$pessoa->apresentar_pessoa();
$pessoa->estudar();

//criando outra pessoa
echo "<br><br>";

$pessoa1 = new Pessoa("Preto", "Azuis", 1.69, 60, "Karen", "Preta", "Python");
$pessoa1->apresentar_pessoa();
$pessoa1->estudar();

if ($pessoa->nome == "Bianca") {
    echo "<br>Essa pessoa não foi criada ainda";
} elseif ($pessoa->nome == "Marcio") {
    echo "<br><br>O Marcio já foi criado";
} else {
    echo "<br><br>Você não informou um nome valido";
}





?>