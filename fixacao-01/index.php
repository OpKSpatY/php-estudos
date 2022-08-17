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
    
    function createArray(){
        $array_nums = Array();
        $array_nums = sortNums($array_nums);
        return $array_nums;
    }

    function sortNums($array){
        for($i=0; $i<6; $i++){
            while (true){
                $aux = rand(1,60);
                if (!in_array($aux, $array)){
                    $array[$i] = $aux;
                    break;
                }
            }
        }
        return $array;
    }

    echo var_dump(createArray());

    ?>
</body>
</html>