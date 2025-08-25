<?php
// "Banco de dados"
// Da para substituir a palavra array por []
$produtos = array(
    array(
        "Nome" => "Shampoo",
        "Marca" => "L'Oreal",
        "Preço" => 18.00,
        "Estoque" => 15
    ),
    array(
        "Nome" => "Condicionador",
        "Marca" => "L'Oreal",
        "Preço" => 21.50,
        "Estoque" => 8
    ),
array(
        "Nome" => "Creme de Pentear",
        "Marca" => "Salonline",
        "Preço" => 34.50,
        "Estoque" => 12
    ),
    array(
        "Nome" => "Leave-in",
        "Marca" => "Itallian",
        "Preço" => 14.90,
        "Estoque" => 9

    ),

);
foreach($produtos as $produto){
    echo'
    <div>
        <h2>' . $produto["Nome"] . '</h2>
        <p style="font-style: italic;">' . $produto["Marca"] . '</p>
        <p>R$ '. $produto["Preço"] . '</p>
        <p>Em estoque: ' . $produto["Estoque"] . '</p>
        <button>Comprar</button>

   </div> 
    ' ;    
      
};

  


   



//usar o mini banco de dados para exibir os produtos na tela
//foreach($produtos as $produto){
    //echo $produto['Nome'] . "<br>";
    //echo $produto['Marca'] . "<br>";
    //echo $produto['Preço'] . "<br><br>";
//};





// Exibindo os produtos na tela
//echo $produtos[0]['Nome'] . "<br>";
//echo $produtos[0]['Marca'] . "<br>";
//echo $produtos[0]['Preço'] . "<br>";
//echo $produtos[1]['Nome'] . "<br>";
//echo $produtos[1]['Marca'] . "<br>";
//echo $produtos[1]['Preço'] . "<br>";    
?>