<html>
    <head>
        <style>
            * {font-size: 200%;}
        </style>
    </head>
</html>

<?php

/*
* Maak een variabele met de naam 'achternaam' en de waarde 'Oosterink' en print die op het scherm.
* Maak een variabele met de naam 'docenten' en daarin alle docenten van de opleiding.
* Print alle namen van de docenten op het scherm
* Print alle namen van de docenten op het scherm behalve die van Joey
 */

 

 

//variabelen

//$lastName = "Orsel";

//$rory = "Rory";

//echo $lastName . "<br>";

//echo "<br>";

//echo $rory;

 

$names = [

    'Rita',

    'Rory',

    'Guillaume',

    'Jorn',

    'Joey'

];

//JSC($names);

$names[0];

$names[1];

$names[2];

//bepaal lengte van de array

//echo count($names);

//loop er doorheen

for($i = 0; $i < 5; $i++){

    if($names[$i] == 'Joey' || $names[$i] == 'Rita'){

        if($names[$i] == "Rita"){

            echo "Rita is de beste!" . "<br>";

        } else {

           

        }

    } else {

        echo $names[$i] . " is geweldig!"; //$names[0] | $names[1] |

        echo "<br>";

    }

   

}

//Stukje code met een naam dat uitgevoerd als je de naam aanroept. Functies kan je dus waarden meegeven.

echo add(2, 3); //Rita-voorbeeld (met woef)

function add($numberOne, $numberTwo){

    $result = $numberOne + $numberTwo;

    return $result;

}

function JSC($input){

    echo "<pre>";

    print_r($input);

    echo "</pre>";

}

//array

//

//for loo

//if else

 

//functions

 

//php specifieke dingen zoals $_POST