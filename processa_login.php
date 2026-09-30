<?php
session_start(); // Inicia a sessão

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nome  = trim($_POST["nome"] ?? "");
    $senha = $_POST["senha"] ?? "";

    
    if ($nome !== "" && $senha === "123") {

      
        $_SESSION["nome_usuario"] = $nome;

       
        header("Location: boas_vindas.php");
        exit;
    } else {
      
        echo "Nome ou senha incorretos. <a href='login.html'>Tentar novamente</a>";
    }
} else {
  
    header("Location: login.html");
    exit;
}
?>