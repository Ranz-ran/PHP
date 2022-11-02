<html>
    <head>
        <style>
                * {font-size: 200%}
        </style>
    </head>
</html>
<?php

    $namens = [
      'Rita',
      'Rory',
      'Guillaume',
      'Jorn',
      'Joey'
    ];

    Jsc($namens);
    $namens[0];
    $namens[1];
    $namens[2];

    for($i = 0; $i < 5; $i++){
        echo $namens[$i];
    }

    function JSC ($input) {
        echo "<pre>";
        print_r($input);
        echo
    }