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
        // Operadores ternários
        // <condição> ? true : false

        $usuario_possui_cartao_loja = false;

        echo $usuario_possui_cartao_loja ? "SIM" : "NÃO";

        $teste = $usuario_possui_cartao_loja ? "SIM" : "NÃO";

        echo $teste;

    ?>
    <p> <?= $teste ?> oi</p>
</body>

</html>