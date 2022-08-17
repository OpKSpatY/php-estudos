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
        // Trabalhando com arrays em PHP
        //$lista_frutas = array();
        $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva', 'Abacaxi'];
        $lista_frutas[] = 'Abacate';

        // Uso da tag <pre></pre> em HTML para formatar a saída dos arrays
        /*
        echo '<pre>';
            var_dump($lista_frutas); // serve para enviar uma saída específica para o array
        echo '</pre>';
        echo '<pre>';
            print_r($lista_frutas); // serve para enviar uma saída específica para o array também, mas são recursos para debug
        echo '</pre>';
        */

        echo $lista_frutas[2];

        // Arrays com índices assoociativos
        $lista_frutas2 = ['a' => 'Banana', 'b' => 'Maçã', 'c' => 'Morango', 'd' => 'Uva', 'e' => 'Abacate'];
        var_dump($lista_frutas2);

        // Adicionando mais variáveis associativas em um array associativo
        $lista_frutas2['d'] = 'Abacaxi';
        echo $lista_frutas2['d'];

        // Criando arrays multidimensionais
        $lista_coisas['Frutas'] = Array(1 => 'Maçã', 2 => 'Banana', 3=> 'Morango', 4=> 'Uva');
        $lista_coisas['Pessoas'] = Array(1 => 'José', 2 => 'Pedro', 3 => 'Henrique');

        var_dump($lista_coisas);

        // Realizando pesquisas dentro de arrays
        // in_array() e array_search()
        // in_array() retorna true ou false
        // array_search() retorna onde está dentro do array

        if (in_array('Maçã', $lista_frutas2))
            echo array_search('Maçã', $lista_frutas2);
        
        // Algumas funções nativas dos arrays
        // is_array(array) => Retorna se é um array ou não
        // array_keys(array) => Retorna todas as chaves de um array
        // sort(array) => Ordena um array e reajusta seus índices
        // asort(array) => Ordena um array preservando seus índices
        // count(array) => Conta quantos elementos tem o array
        // array_merge(array,...) => Funde um ou mais arrays
        // explode(array) => Divide uma string baseada em um delimitador
        // implode(array) => Junta elementos de um array em uma string baseando-se em um delimitador
        
 
    ?>
</body>
</html>