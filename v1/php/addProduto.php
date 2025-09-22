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

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4 ">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link texto-rosa" href="sobre.html" target="_blank">Sobre</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Comprar</a>
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

              
            </div>
        </div>
    </nav>
      <form method="POST" action="inserirProduto.php">
      <!-- Formulário para cadastro -->
                <p>Nome do Produto<input type="text" name="nome_produto"><p>
                <p>Quantidade em Estoque<input type="number" name="qtd_estoque"><p>
                <p>Preço Unitário<input type="text" name="preco_unitario"><p>
                <p>Tamanho<input type="text" name="tamanho"><p>
                <p>Imagem<input type="text" name="imagem"><p>
                <input type="submit" value="Enviar" name="Enviar">



                
      <!--<p>
        <label>Nome do Produto:</label><br>
        <input type="text" name="nome_produto" placeholder="Nome do Produto" required>
    </p>
    <p>
        <label>Quantidade em Estoque:</label><br>
        <input type="number" name="qtd_em_estoque" placeholder="Quantidade" required>
    </p>
    <p>
        <label>Preço Unitário:</label><br>
        <input type="text" name="preco_unitario" placeholder="Preço Unitário" required>
    </p>
    <p>
        <label>Tamanho:</label><br>
        <input type="text" name="tamanho" placeholder="Tamanho">
    </p>
    <p>
        <label>URL da Imagem:</label><br>
        <input type="text" name="imagem" placeholder="URL da Imagem">
    </p>
    <p>
        <button type="submit" class="btn btn-outline-dark">Cadastrar Produto</button>
    </p>-->
</form>


</body>

</html>

