<?php
    $pontuacao = 0;
    $resposta = [];

    echo "<p>Jogo de Perguntas<p>";
    // 1º Questão
    echo "<br> 1. Qual era o nome do 'descobridor' do Brasil?
          <br> a. Cabral
          <br> b. Cabril
          <br> c. Cabrol
    ";
    $resposta[0] = "a";
    echo "<br>Resposta: " . $resposta[0];
    if ($resposta[0] == "a"){
        echo "<br>Resposta correta!";
        $pontuacao++; // É o mesmo que $pontuacao = $pontuacao + 1;
    } else {
        echo "<br>Você errou!";
    }

    //2º Questão
    echo "<p><br>Qual era a cor do cavalo Branco de Napoleão?</p>
          <br>a. Branco
          <br>b. Marrom
          <br>c. Preto
    ";
    $resposta[1] = "b";
    echo "<br>Resposta: " . $resposta[1];
    if ($resposta[1] == "a"){
        echo "<br>Errou! Branco era o nome do Cavalo de Napoleão, mas a cor dele era marrom";
    } else if ($resposta[1] == "b"){
        echo "<br>Acertou! Parabéns!";
        $pontuacao++;
    } else if ($resposta[1] == "c"){
        echo "Misercórdia! Vai estudar!";
    } else {
        echo "Você escolheu uma opção invalida";
    }
    
    //2º Questão
    echo "<p><br>Qual é a capital do Brasil?</p>
          <br>a. Pavuna
          <br>b. Maricá
          <br>c. Brasilia
    ";
    $resposta[2] = "c";
    switch($resposta[2]){ // switch case é uma estrutura de decisão
        case "a":
        echo "<br>Pavuna é um bairro do Rio de Janeiro";
        break;
        
        case "b":
            echo "<br>Maricá é um municipio do estado do Rio de Janeiro";
            break;
        
        case "c":
                echo "<br>Parabéns você acertou";
                $pontuacao++;
                break; 
       
       default:
       echo "<br>Opção inválida";

       break;
         }

         echo "<p><br>Voce tirou $pontuacao pontos!</p>";

         echo "<br>Você tirou, deixe-me ver...";

         $x = 1;
         while($x <= $pontuacao){
            echo "<br>$x";
            $x++;
         }

         echo "<br>pontos";

         echo "<br>Vou contar de novo!";
         for($x = 1; $x <= $pontuacao; $x++){
            echo "<br>$x";
         }
            echo "<br>pontos";

?> 


<?php
    $pontuacao = 0;
    $resposta = [];

    echo "<p>Jogo de Perguntas<p>";
    // 1º Questão
    echo "<br> 1. Qual era o nome do 'descobridor' do Brasil?
          <br> a. Cabral
          <br> b. Cabril
          <br> c. Cabrol
    ";
    $resposta[0] = "a";
    echo "<br>Resposta: " . $resposta[0];
    if ($resposta[0] == "a"){
        echo "<br>Resposta correta!";
        $pontuacao++; // É o mesmo que $pontuacao = $pontuacao + 1;
    } else {
        echo "<br>Você errou!";
    }

    //2º Questão
    echo "<p><br>Qual era a cor do cavalo Branco de Napoleão?</p>
          <br>a. Branco
          <br>b. Marrom
          <br>c. Preto
    ";
    $resposta[1] = "b";
    echo "<br>Resposta: " . $resposta[1];
    if ($resposta[1] == "a"){
        echo "<br>Errou! Branco era o nome do Cavalo de Napoleão, mas a cor dele era marrom";
    } else if ($resposta[1] == "b"){
        echo "<br>Acertou! Parabéns!";
        $pontuacao++;
    } else if ($resposta[1] == "c"){
        echo "Misercórdia! Vai estudar!";
    } else {
        echo "Você escolheu uma opção invalida";
    }
    
    //2º Questão
    echo "<p><br>Qual é a capital do Brasil?</p>
          <br>a. Pavuna
          <br>b. Maricá
          <br>c. Brasilia
    ";
    $resposta[2] = "c";
    switch($resposta[2]){ // switch case é uma estrutura de decisão
        case "a":
        echo "<br>Pavuna é um bairro do Rio de Janeiro";
        break;
        
        case "b":
            echo "<br>Maricá é um municipio do estado do Rio de Janeiro";
            break;
        
        case "c":
                echo "<br>Parabéns você acertou";
                $pontuacao++;
                break; 
       
       default:
       echo "<br>Opção inválida";

       break;
         }

         echo "<p><br>Voce tirou $pontuacao pontos!</p>";

         echo "<br>Você tirou, deixe-me ver...";

         $x = 1;
         while($x <= $pontuacao){
            echo "<br>$x";
            $x++;
         }

         echo "<br>pontos";

         echo "<br>Vou contar de novo!";
         for($x = 1; $x <= $pontuacao; $x++){
            echo "<br>$x";
         }
            echo "<br>pontos";

?>

