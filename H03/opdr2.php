<?php
//Kerstboom
echo "<div style='text-align: center'>";

//Teken het aantal kaarsjes op de taart...

for($i = 0; $i < 9; $i++) {
    for ($ster = 0; $ster < $i; $ster++){
        echo "*";
    }
    echo "*<br>";
}

?>