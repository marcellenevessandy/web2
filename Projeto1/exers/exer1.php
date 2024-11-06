<?php
// Todo código php precisa estar dentro de <?php ? >

//Envia um expressão ou mais para saída
echo "Hello World" . "<br>";

//Como criar uma variavel em php
$nome = "Marcelle";
$sobrenome = "Neves Sandy";
$idade = 21;
$alura = 1.77;

// Concatenar php usar sinal . (ponto)
echo "$nome " . "$sobrenome" . "<br>";
echo "Idade:" . $idade;
echo "<h1 style='color:blue; text-align:center;'> " . $nome . "<br>" . $sobrenome . "</h1>";

//Sem concatenar
echo "<h1 style='color:red; text-align:center;'> $nome <br> $sobrenome </h1>";

// Você pode colocar estilo dentro do php
echo "<h1 style='color:pink; text-align:center;'> " . $nome . "</h1>";
echo "<h1 style='color:green; text-align:row;'> " . $nome . "<br>" . $sobrenome . "</h1>";

//Calcular IMC
$nome = "Marcelle";
$peso = 95;
$altura = 1.70;
$imc = $peso / pow($altura, 2);

//Para usar o number_format precisa concatenar com ponto 
echo "Nome: $nome <br>" . "Peso:" . number_format($peso, 2)
. "<br> Altura:" . number_format($altura, 2)
. " <br> IMC:" . number_format($imc, 2);
?>