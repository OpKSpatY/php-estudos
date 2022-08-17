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
        // Trabalhando com datas em PHP
        echo date('d,m,Y  H:i'); // https://www.php.net/manual/pt_BR/datetime.format.php
        echo '<br>';

        echo date_default_timezone_get(); // retorna qual timezone está

        // Cálculos envolvendo datas
        // ao realizar cálculos com datas, é importante manter o padrão (ano, mês, dia)
        $data_inicial = '2018-04-24';
        $data_final = '2018-05-15';

        $time_inicial = strtotime($data_inicial); // Retorna quantos segundos existem em datas textuais
        $time_final = strtotime($data_final);

        $calc_time = '<br>' . abs($time_inicial - $time_final) / (24 * 60 * 60);
        echo $calc_time;
    ?>
</body>
</html>