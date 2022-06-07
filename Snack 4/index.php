<?php
/*
    Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
*/

$arrayNumUnivoci = [];
$min = 1;
$max = 30;

while(count($arrayNumUnivoci) < 15){
    $num = rand($min, $max);
    if(!in_array($num, $arrayNumUnivoci)){
        $arrayNumUnivoci[] = $num;
    }
}

sort($arrayNumUnivoci);
var_dump($arrayNumUnivoci);

?>


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
        echo "<h3>Numeri random univoci:</h3><ul>";
        for($i = 0; $i < sizeof($arrayNumUnivoci); $i++){
            echo "<li>" . $arrayNumUnivoci[$i] . "</li>";
        };
        echo "</ul>";
    ?>
</body>
</html>