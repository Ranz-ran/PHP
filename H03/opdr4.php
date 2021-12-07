<!DOCTYPE html>
<html>
<head>
    <title>PHP opdrcht4</title>
    <style>
        body{
            text-align: center;
        }

        .rood {
            border: #e84949 solid 5px;
        }
/**/
        .groen {
            border: #4bd94b solid 5px;
        }
    </style>
</head>

<body>
<?php
    for($i = 1; $i <= 9; $i ++) {
        if($i % 2 == 0) {
            $class = "class='rood'";
        } else {
            $class = "class='groen'";
        }
        echo "<img ".$class." src='plaatje/aap".$i.".jpg'>";
    }
?>
</body>
</html>