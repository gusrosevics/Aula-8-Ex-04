<?php
session_start(); // Inicia a sessão

// Verifica se o usuário está logado
if (!isset($_SESSION["nome_usuario"])) {
    // Se não estiver logado, redireciona para o login
    header("Location: login.html");
    exit;
}

$nome = htmlspecialchars($_SESSION["nome_usuario"]); // Proteção contra XSS
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Boas-vindas</title>
</head>
<body>
    <h1>Bem-vindo(a), <?php echo $nome; ?>!</h1>
    <p>Você está logado com sucesso.</p>

    <a href="logout.php">Sair</a>
</body>
</html>