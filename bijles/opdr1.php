<?php
/*
* Maak een variabelen met de naam 'achternaam' en de waarde 'Oosterink en print die op het scherm.
* Maak een variabelen met de naam 'docenten' en daarin alle docenten van de opleiding.
* Print alle namen van de docenten op het scherm.
* Print alle namen van de docenten op het scherm behalve die van Joey.
*/

//variabelen
$achternaam = "Oosterink";
$docenten = [
    "Jorn",
    "Joey",
    "Rick",
    "Piet",
    "Joris",
    "Anna",
    "Rita"
];

for($i = 0; $i < count($docenten); $i++){

    if ($docenten[$i] == "Joey"){
    } else {
        echo $docenten[$i];
        echo "<br>";
    }
}