<?php
//Tipo de variáveis
$nome = "Marcio"; //String
$idade = 40; //Inteiro
$altura = 1.72; //Float
$vivo = true; //Boolean


//arrays
$frutas = ["Uva","Banana", "Maçã"];
$casas = [102, 104, 106];
$cadastro1 = ["Marcio", 40, 1.72];

//chave/valor
$cadastro_pessoa = array(
 "Nome" => "Marcio",
    "Idade" => 40,
    "Altura" => 1.72
);
echo $cadastro_pessoa["Nome"] . "<br>";
echo $cadastro_pessoa["Idade"] . "<br>";
 //lista dentro de lista

//essas informações ficam disponiveis na tela.
 $cadastro_pessoa1 = array(
    array(
        "Nome" => "Ana",
        "Idade" => 35,
        "Altura" => 1.70
    ),
    array(
        "Nome" => "Caren",
        "Idade" => 34,
        "Altura" => 1.58
    )
 
);

echo $cadastro_pessoa1[1]["Nome"] . "<br>";
echo $cadastro_pessoa1[0]["Idade"] . "<br>";



//$cadastro_pessoa = [
    //["Marcio", 40, 1.72],
    //["Ana", 35, 1.70],
    //["Caren", 34, 1.58]
   // ];


?>