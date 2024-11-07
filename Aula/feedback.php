<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Deixe seu Feedback</h1>

    <form method="POST">
        <label for="mensagem">Sua mensagem:</label><br>
        <textarea id="mensagem" name="mensagem" rows="4" cols="50" placeholder="Escreva Algo..."></textarea><br>
        <br>
        <input type="submit" value="enviar">
    </form>

    <h2>Seu Feedback</h2>

    <?php

    //verifica se o form foi rnviado e se o campo 
    //'mensagem' não está vazio

    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["mensagem"])) {
        //exibe a mensagem enviada
        $mensagem = htmlspecialchars($_POST["mensagem"]);

        echo "<p><strong>Você escreveu:</strong>
        $mensagem</p>";
    } else {
        echo "<p>Envie uma mensagem usando o formulário acima!</p>";
    }
    ?>

</body>

</html>