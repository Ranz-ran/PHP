<!DOCTYPE html>
<html lang="en">
<head>
    <title>zwemmen</title>
    <style>
        table, tr, td {
            border: solid black 1px;
            border-collapse: collapse;
        }
        td{
            padding: 10px;
        }
        img{
            width: 25px;
            margin-right: 5px ;
        }
        td.plaatjes{
            border: solid white 1px;
        }
    </style>
</head>
<body>

<table>

<?php
//Het kampioenschap zwemmen voor jan en alleman gaat van start
//De organisator wil een website met daarop de zwemclubs met hun ledenaantal onder elkaar en voor
// iedere 5 zwemmers wordt er een plaatje van een zwemmer afgebeeld.
//Zet alle zwemclubs en hun ledenaantal in een array. Doorloop de array met een foreach en geef het correcte
// aantal plaatjes weer.


    $zwemblubs = array(
            "De spartelkuikens" => 25,
            "De waterbuffels" => 32,
            "Plonsmderin" => 11,
            "Bommetje" => 23
    );

    foreach ($zwemblubs as $clubnaam => $zwemmers){

        echo '<tr>';

        //clubnamen
        echo "<td>$clubnaam</td>";

        //zwemmersaantallen
        echo "<td>$zwemmers</td>";

        //plaatjes
        echo  '<td>';
        $plaatjes = floor($zwemmers / 5);
        for ($i = 0; $i < $plaatjes; $i++){
            echo '<img src="//unsplash.it/50" alt="plaatje">';
        }

        echo '</td>';

        echo '</tr>';

    }
//echo "<div>$clubnaam -> $zwemmers -> $plaatjes</div>";
?>

</table>

</body>
</html>