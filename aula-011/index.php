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

        function printText($text){
            echo $text . '<br>';
        }

        // Tratamento de texto em PHP
        $texto = "Curso completo de PHP";
        printText($texto);

        // uppercase
        $texto = strtoupper($texto);
        printText($texto);

        //lowercase
        $texto = strtolower($texto);
        printText($texto);
    
        //capitalize
        $texto = ucfirst($texto);
        printText($texto);

        //lenght
        $len = strlen($texto);
        printText($len);

        //string replace (o que quer que seja substituido, pelo o que será substituído e o texto em que se encontraria)
        $texto = "Curso completo de PHP";
        echo $texto = str_replace('PHP', 'JavaScript', $texto) . '<br>';

        //substr (retorna parte de uma string)
        echo $texto = substr($texto, 0, 14) . ' ...'



    ?>
</body>
</html>