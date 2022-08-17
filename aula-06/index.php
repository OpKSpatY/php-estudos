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
        // Operadores condicionais
        // Os operadores são os mesmos, fazendo um adendo apenas ao !=, que também pode ser escrito como <>
        if(true){
            echo "Verdadeiro";
        }
        else{
            echo "Falso";
        }

        // Operadores lógicos
        // Mesma coisa, porém existe o operador XOR, que verifica se uma das expressões é verdadeira, mas não ambas
        // É possível, ao invés de escrever "&&", escrever AND, e para "||" escrever OR

        if (5 == 3 AND 5 == 5){
            echo "Verdadeiro";
        }
        else{
            echo "Falso";
        }

        if (5 == 3 OR 5 == 5){
            echo "Verdadeiro";
        }
        else{
            echo "Falso";
        }

        if (5 == 3 XOR 5 == 5){
            echo "Verdadeiro";
        }
        else{
            echo "Falso";
        }

        if (5 != 3 XOR 5 == 5){ // Apenas uma pode retornar verdadeiro para o XOR retornar verdadeiro, não ambas.
            echo "Verdadeiro";
        }
        else{
            echo "Falso";
        }

        // É possível também executar o operador ! (negação)
        if (!(5 == 3 AND 5 == 5)){
            echo "Verdadeiro";
        }
        else{
            echo "Falso";
        }
    ?>
</body>

</html>