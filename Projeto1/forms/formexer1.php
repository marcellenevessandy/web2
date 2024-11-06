<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/formexer1.css">
    <title>Fomrmulário 1</title>
</head>

<body>
    <form method="post" action="#">
    <h2>Consultório da Dra. Aline</h2>
        <input type="text" name="nome" id="nome" placeholder="Digite seu nome:" maxlength="100" require><br>

        <!-- name="" é uma tag obrigatória -->
        <label for="nascimento">Data de Nascimento:</label>
        <input type="date" name="anoNascimento" id="anoNascimento" require><br>

        <input type="number" step="0.1" name="peso" id="peso" placeholder="Digite seu peso:" require><br>

        <input type="number" step="0.1" name="altura" id="altura" placeholder="Digite sua altura:" require><br>

        <label>Gênero:</label>
        <input type="radio" id="masculino" name="genero" value="masculino">
        <label for="masculino">Masculino</label><br>

        <input type="radio" id="feminino" name="genero" value="feminino">
        <label for="feminino">Feminino</label><br>

        <input type="submit" name="salvar" value="salvar" id="salvar">
        <input type="reset" name="limpar" value="limpar" id="limpar">

    </form>

</body>

</html>