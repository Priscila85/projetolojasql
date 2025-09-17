<?php require("conexao.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" /> <!-- /> não é necessario é do html 4-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Patinhas Mimi" /> <!-- Nome do site -->
    <meta name="author" content="Ana Priscila" /> <!-- quem fez o site-->
    <title>Gatitos</title> <!-- o que aparece no navegador-->
    <!-- Ícone da aba (favicon) -->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Ícones do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- CSS principal do tema (inclui Bootstrap) -->
    <link href="../css/styles.css" rel="stylesheet" />
    <link href="../css/mystyle.css" rel="stylesheet">
</head>

<body class="cor-corpo">


    <!-- Navegação -->

    <nav class="navbar navbar-expand-lg navbar-light bg-topo">

        <div class="container px-4 px-lg-5">
            <a class="navbar-brand mi-bolder" href="#!">Mimi Lovers Shop</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4 ">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                    <li class="nav-item"><a class="nav-link texto-rosa" href="sobre.html" target="_blank">Sobre</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Comprar</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item texto-rosa" href="#!">Todos os produtos</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item texto-rosa" href="#!">Itens populares</a></li>
                            <li><a class="dropdown-item texto-rosa" href="#!">Novas chegadas</a></li>

                        </ul>

                    </li>

                </ul>
                <form class="d-flex">
                    <?php
                    session_start(); // Inicia a sessão para acessar as variáveis de sessão
                    echo "<span style='color: #ff3399;'>". $_SESSION['nome']. "</span>"; // Exibe o nome do usuário logado
                    ?>
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Carrinho
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <?php
    //criar a query para listar os produtos
    $sql = "SELECT * FROM produtos";
    //executar a query
    $listar = $conexao->query($sql); 
    //transformar o resultado em um array
    //mostra o resultado na tela
    if($listar->num_rows > 0) {
        //tem produto
        while($linha = $listar->fetch_assoc()) {
            //mostrar os dados na tela
            echo '
                <div class="col mb-5">
                    <div class="card h-100 mi-bolder cor-corpo">
                        <img class="card-img-top" src="assets/' . $linha["imagem"] . '"
                            alt="Bolsa ecológica com a frase Gato é perfeito, afinal errar é humano." />
                        <div class="card-body p-4">
                            <div class="text-center text-pink">
                                <h5 class="mi-bolder">' . $linha["nome_produto"] . '</h5>
                                R$' . $linha["preco_unitario"] . ',00
                            </div>
                            </div>
                        </div>
                       <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Comprar</a></div>
                        </div>
                    </div>
                </div>
            ';
          
        }
        
    } else {
        echo "<br><p>Não tem produto cadastrado.</p>";
    }
    ?>

</body>

</html>