<?php
//Funções sem parâmetros o resultado é sempre o mesmo
function somar(){
    $x = 5;
    $y = 10;
    $resultado = $x + $y;   
    return $resultado;
}
echo somar() . "<br>"; 

//função com parâmetros o resultado depende dos valores passados
function soma1($x, $y){
    $resultado = $x + $y;   
    return $resultado;
}

echo soma1(20, 5) . "<br>";
echo soma1(2, 7) . "<br>";
echo soma1(0, 71) . "<br>";
echo soma1(20, 5) + soma1(0,8) . "<br>";
?>