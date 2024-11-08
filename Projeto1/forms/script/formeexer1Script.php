<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/formeexer1Script.css">
    <title>Document</title>
</head>

<body>
    <div class="conteiner">
    <?php

  //  print_r($_POST);

    if (

        //recebe os valores
        isset($_POST["nome"]) &&
        isset($_POST["anoNascimento"]) &&
        isset($_POST["altura"]) &&
        isset($_POST["peso"]) &&
        isset($_POST["genero"]) &&

        //verifica se os campos não estão vazios
        !empty($_POST["nome"]) &&
        !empty($_POST["anoNascimento"]) &&
        !empty($_POST["altura"]) &&
        !empty($_POST["peso"]) &&
        !empty($_POST["genero"])
    ) {

        //craindo as variaveis 
        $nome = ucfirst($_POST["nome"]);
        $anoNascimento = $_POST["anoNascimento"];
        $altura = $_POST["altura"]; //(float) força a variavel a receber o valor
        $peso = $_POST["peso"];
        $genero = $_POST["genero"];

        //calcular a idade
        $anoNascimentoObj = new DateTime($anoNascimento);
        $dataAtual = new DateTime();
        $idade = $dataAtual->diff($anoNascimentoObj)->y;

        //calcular imc
        $imc = $peso / ($altura * $altura);
      //$imc = round($imc, 1); //arredonda para uma casa decimal
  // var_dump($imc);
        //classificação imc
        if ($imc < 18.5) {
            $resultado = "Abaixo do peso";
        } elseif ($imc < 24.9) {
            $resultado = "Abaixo normal";
        } elseif ($imc < 29.9) {
            $resultado = "Obesidade I";
        } elseif ($imc < 34.9) {
            $resultado = "Obesidade II";
        } elseif ($imc > 34.9) {
            $resultado = "Obesidade III";
        }

        //exibir resultados 
   if($genero == "masculino"){
        echo "<h2>Resultado da Avaliação</h2>";
        echo "<p><strong>Nome:</strong> Sr. $nome</p>";
        echo "<p><strong>Data de Nascimento:</strong> " . date("d/m/Y", strtotime($anoNascimento)) . "</p>";
        echo "<p><strong>Idade:</strong> $idade anos</p>";
        echo "<p><strong>Peso:</strong> $peso kg</p>";
        echo "<p><strong>Altura:</strong> $altura m</p>";
        echo "<p><strong>IMC:</strong> $imc</p>";
        echo "<p><strong>Classificação:</strong> $resultado</p>";
   }else{
    echo "<h2>Resultado da Avaliação</h2>";
    echo "<p><strong>Nome:</strong> Sra. $nome</p>";
    echo "<p><strong>Data de Nascimento:</strong> " . date("d/m/Y", strtotime($anoNascimento)) . "</p>";
    echo "<p><strong>Idade:</strong> $idade anos</p>";
    echo "<p><strong>Peso:</strong> $peso kg</p>";
    echo "<p><strong>Altura:</strong> $altura m</p>";
    echo "<p><strong>IMC:</strong> $imc</p>";
    echo "<p><strong>Classificação:</strong> $resultado</p>";
   }
    } else {
        echo "Os dados não foram fornecidos corretamente!";
    }

    ?>
    </div>
</body>

</html>