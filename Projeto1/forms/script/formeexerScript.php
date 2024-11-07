<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    print_r($_POST);

    if (
        isset($_POST["nome"]) &&
        isset($_POST["anoNascimento"]) &&
        isset($_POST["altura"]) &&
        isset($_POST["peso"]) &&
        isset($_POST["genero"]) &&

        !empty($_POST["nome"]) &&
        !empty($_POST["anoNascimento"]) &&
        !empty($_POST["altura"]) &&
        !empty($_POST["peso"]) &&
        !empty($_POST["genero"])
    ) {

        $nome = ucfirst($_POST["nome"]);
        $anoNascimento = date("y", strtotime($_POST["anoNascimento"]));
        $altura = (float)($_POST["altura"]);
        $peso = (float)($_POST["peso"]);
        $genero = $_POST["genero"];
        $dataAtual = new DateTime();

        $diaHoje = date("Y-m-d");

        echo $diaHoje;
        // array e objeto
        print_r($dataAtual);

        $imc = $peso / (pow($altura, 2));
        // $idade = $datT;
    } else {
        echo "Os dados não foram fornecidos corretamente!";
    }
    ?>
</body>

</html>