<?php
/*
    Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

    Olimpia Milano - Cantù | 55-60
*/
var_dump($_GET);

$partite = [
    [
        "squadraCasa" => "Olimpia Milano",
        "squadraOspite" => "Cantù",
        "punteggioCasa" => 55,
        "punteggioOspite" => 60
    ],
    [
        "squadraCasa" => "Aquila Basket",
        "squadraOspite" => "Pallacanestro Varese",
        "punteggioCasa" => 80,
        "punteggioOspite" => 68
    ],
    [
        "squadraCasa" => "Toronto Raptors",
        "squadraOspite" => "Miami Heat",
        "punteggioCasa" => 90,
        "punteggioOspite" => 98
    ],
    [
        "squadraCasa" => "Chicago Bulls",
        "squadraOspite" => "Houston Rockets",
        "punteggioCasa" => 101,
        "punteggioOspite" => 100
    ],
    [
        "squadraCasa" => "Los Angeles Lakers",
        "squadraOspite" => "Golden STate Wariors",
        "punteggioCasa" => 106,
        "punteggioOspite" => 110
    ],
    [
        "squadraCasa" => "New York Knicks",
        "squadraOspite" => "Chicago Bulls",
        "punteggioCasa" => 100,
        "punteggioOspite" => 104
    ]
];
        
var_dump($partite);

//usando  "count($nomeArray)" o "sizeof($nomeArray)"  ho il numero degli elementi dell'array
echo sizeof($partite);



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
    <h1>Partite:</h1>

    <?php
        for($i = 0; $i < sizeof($partite); $i++){
            for($j = 0; $j < sizeof($partite[$i]); $j++){
                echo "$partite[$i][$j]";
            };
            
        };
    ?>
</body>
</html>