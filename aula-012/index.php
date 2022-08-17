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
        // Funções nativas para operações matemáticas

        $valor = (float)10.45;

        //Arredondar para cima
        echo ceil($valor) . '<br>';

        //Arredondar para baixo
        echo floor($valor) . '<br>';

        //Arredonda para o que seja mais próximo
        echo round($valor) . '<br>';

        //Gerar valor aleatório
        echo rand(10,20) . '<br>'; // É possível passar os parâmetros dentre os quais deseja ter um retorno

        //Retornar a raiz quadrada
        echo sqrt($valor) . '<br>';

    ?>
</body>
</html>