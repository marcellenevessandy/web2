<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Calculadora de Produtos</h1>

    <form method="POST" action="./script.php">

        <label for="produto">Informe o Produto:</label><br>
        <input type="text" name="produto"><br>


        <label for="quantidade">Informe a quantidade:</label><br>
        <input type="number" name="quantidade"><br>


        <label for="valorunit">Informe o Valor Unitario:</label><br>
        <input type="number" name="valorunit" step="0.1"><br>
        <input type="submit" value="Calcular">

    </form>
</body>

</html>