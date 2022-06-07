<?php
/*
    Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
*/


$alunni = [
    [
        "nome" => "Ugo",
        "cognome" => "De Ughi",
        "voti" => [
            10,
            8,
            4,
            8.5
        ],
    ],
    [
        "nome" => "Michele",
        "cognome" => "Iliescu",
        "voti" => [
            10,
            2,
            8,
            8.5
        ],
    ],
    [
        "nome" => "Francesco",
        "cognome" => "Totti",
        "voti" => [
            4,
            8,
            4,
            8.5
        ],
    ],
    [
        "nome" => "Valentino",
        "cognome" => "Rossi",
        "voti" => [
            10,
            8,
            4,
            8.5
        ],
    ],
];
var_dump($alunni);


function getMedian($array){
    $sumNumbers = 0;
    for($i = 0; $i < count($array); $i++){
        $sumNumbers += $array[$i];
    }
    return $sumNumbers / count($array);
}

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
        for($i = 0; $i < sizeof($alunni); $i++){
                echo 
                    "<p>"
                        . $alunni[$i]["nome"] . " " . $alunni[$i]["cognome"] . " | Media dei voti: " . getMedian($alunni[$i]["voti"]) .
                    "</p>"
                ;
            echo "<hr>";
        };
    ?>
    
</body>
</html>