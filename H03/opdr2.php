<?php
//Kerstboom
echo "<div style='text-align: center'>";

//aantal * als boombladeren

for($i = 0; $i < 9; $i++) {
    for ($ster = 0; $ster < $i; $ster++){
        echo "*";
    }
    echo "*<br>";
}

?>