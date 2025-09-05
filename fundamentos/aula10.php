<?php
// Iniciar uma sessão e armazenar um valor nela
    session_start();
// Armazenar um valor na sessão
    $_SESSION['nome'] = 'Ana';
// Acessar o valor armazenado na sessão
    echo $_SESSION['nome'];
// Destruir a sessão
    session_destroy();
?>