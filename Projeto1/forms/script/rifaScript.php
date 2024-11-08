<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/rifaScript.css">

    <title>Document</title>
</head>
<body>
<div class="conteiner">
    <?php

if (isset($_POST["premio"]) && isset($_POST["data"]) && isset($_POST["valor"]) && isset($_POST["quantidade"])) {

    // Verifica se os campos não estão vazios
    if (!empty($_POST["premio"]) && !empty($_POST["data"]) && !empty($_POST["valor"]) && !empty($_POST["quantidade"])) {

        // Recebe os valores
        $premio = ucfirst($_POST["premio"]); // Capitaliza o nome do prêmio
        $data = $_POST["data"];
        $valor = $_POST["valor"];
        $quantidade = (int)$_POST["quantidade"]; // Converte para inteiro

        // Exibir as informações do prêmio
        echo "Prêmio: $premio <br>";
        echo "Data: $data <br>";
        echo "Valor: R$ $valor <br>";
        echo "Quantidade: $quantidade <br><br>";

        // Criar os cartões da rifa conforme a quantidade
        echo "<h3>Cartões da Rifa:</h3>";
        for ($i = 1; $i <= $quantidade; $i++) {
            echo "Cartão #$i - Prêmio: $premio, Valor: R$ $valor, Data: $data <br>";
        }

    } else {
        echo "Os dados não foram fornecidos corretamente!";
    }

} else {
    echo "Os dados não foram fornecidos corretamente!";
}
  ?>
  
    </div>
</body>
</html>