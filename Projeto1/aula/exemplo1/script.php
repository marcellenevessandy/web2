<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (
        isset($_POST["produto"]) &&
        isset($_POST["quantidade"]) &&
        isset($_POST["valorunit"]) && 
        !empty($_POST["produto"]) && 
        !empty($_POST["quantidade"]) && 
        !empty($_POST["valorunit"])) {

        $produto = ucfirst($_POST["produto"]);
        $quantidade = (int)($_POST["quantidade"]);
        $valorunit = (float)($_POST["valorunit"]);
        $total = $quantidade * $valorunit;

        echo "O Produto $produto custa $valorunit<br>";
        echo "Foi comprado $quantidade Produtos<br>";
        echo "O valor total é R$ $total<br>";
    } else {
        echo "Os dados não foram fornecidos corretamente!";
    }
    ?>
</body>

</html>