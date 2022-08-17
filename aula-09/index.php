<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Pós-incremento</h3>
    <?php
    // Operadores de incremento/decremento
    $valor = 5;
    echo "O valor da variável antes do incremento é: $valor";
    echo 'O valor contido após o incremento é: ' . $valor++ . '</br>';
    echo 'O valor atualizado é: ' . $valor++ . '</br>';
    ?>

    <h3>Pré-incremento</h3>
    <?php
    // Operadores de incremento/decremento
    $valor = 5;
    echo "O valor da variável antes do incremento é: $valor";
    echo 'O valor contido após o incremento é: ' . ++$valor . '</br>';
    echo 'O valor atualizado é: ' . ++$valor . '</br>';
    ?>

</body>

</html>