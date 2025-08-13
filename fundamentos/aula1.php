<?php
//Primeiro programa
echo "Olá Mundo!";
 
// declaração de variaveis 
 
 $idade = 40; 
 $altura = 1.71;
 $nome = "Marcio";
 $trabalho = true;
// . é concatenar(junta duas strings)
 echo " <br>Meu nome é: " . $nome . " tenho, " . $idade . " anos, minha altura é de " . $altura . " . Se eu trabalho?  "
. $trabalho . ".";

//echo "<br>Meu nome é $nome, tenho $idade anos, minha altura é de $altura. Se eu trabalho? $trabalho."; mais simples

//Operadores aritimeticos

$x=10;
$y=15;

$soma = $x + $y;
$subtracao = $x - $y;
$multiplicacao = $x * $y;
$divisao = $x / $y;
$resto = $x % $y;

echo "<br>Soma de " . $x . " e " . $y . ": " . $soma;
echo "<br>Subtração de " . $x . " e " . $y . ": " . $subtracao;
echo "<br>Multiplicação de $x e $y : $multiplicacao";
echo "<br>Multiplicação de $x e $y : $divisao";
echo "<br>Multiplicação de $x e $y : $resto";

//transformação do tipo de variavel
$div_inteiro = intval($divisao);
echo "<br>Divisão entre $x e $y: $div_inteiro";

$num1 = 4;
$num2 = 2;
$div = $num1 / $num2;
$div_float = floatval($div);

echo "<br>Resultado $div_float";

?>

