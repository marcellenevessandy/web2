<?php
include "funcoes.php";

//processa cadastro usuario 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["senha"])) {
    $novoUsuario = $_POST["usuario"];
    $novaSenha = $_POST["senha"];
    salvarUsuario($novoUsuario, $novaSenha);
    echo "Usuário cadastrado com sucesso!";
}

//processa exclusão do usuario

if (isset($_GET["excluir"])) {
    $index = $_GET["excluir"];
    excluirUsuario($index);
    header("location: cadastro.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../crud1/css/crud1.css">

    <title>Cadastro de Usuários</title>
</head>

<body>
    <h2>Cadastre Um Novo Usuário</h2>

    <form method="POST" action="cadastro.php">

        <input type="text" name="usuario" id="usuario" placeholder="Usuário: " required>
        <br>
        <input type="password" name="senha" id="senha" placeholder="Senha: " required>
        <br>

        <button type="submit">Cadastrar</button>
    </form>

    <h3>Usuários Cadastrados</h3>
    <?php listarUsuarios(); ?>

    <a href="login.php">Voltar</a>
</body>

</html>