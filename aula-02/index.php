<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Trabalhando com variáveis em PHP
    $variavel = "variável declarada com sucesso!";

    // Atribuição de valores para as variáveis (não existe definição de tipo)
    // String
    $string_variable = "isso é uma string";
    
    // Int
    $int_variable = 2;

    // Float
    $float_variable = 2.5;

    // Boolean
    $boolean_variable = true;
    ?>

    <!-- Printando variáveis com o PHP -->

    <p>String variable: <?= $string_variable?>  </p>
    <p>Int variable: <?= $int_variable?>  </p>
    <p>FLoat variable: <?= $float_variable?>  </p>
    <p>Boolean variable: <?= $boolean_variable?>  </p> <!-- Boolean retorna, no browser, 1 (true) ou 0 (false) -->
</body>

</html>