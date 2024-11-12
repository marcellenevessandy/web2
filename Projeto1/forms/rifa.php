<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../forms/css/rifa.css">
    <title>Gerador de Rifa</title>
</head>

<body>
    

    <form method="post" action="./script/rifaScript.php">
        <h2>Gerador de Rifa</h2>

        <label for="Prêmio">Digite o prêmio:</label>
        <input type="text" name="premio" id="premio" maxlength="100" require><br>

        <label for="data">Digite a data:</label>
        <input type="date" name="data" id="data" require><br>

        <label for="valor">Digite o valor:</label>
        <input type="number" step="0.01" name="valor" id="valor" require><br>

        <label for="quantidade">Digite a quantidade:</label><br>
        <input type="number" name="quantidade"><br>

        <input type="submit" value="Gerar">
    </form>
    
</body>

</html>