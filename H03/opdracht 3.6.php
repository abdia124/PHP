<?php
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>zwemmen</title>
    <style>
        img {
            width: 40px;
        }
    </style>
</head>
<body>
<?php

$zwemmers = array(25, 32, 11, 23);

$plekken = array("De spartelkuikens", "De waterbuffels", "Plonsmderin", "Bommetje");

$teller = 0;

foreach ($plekken as $plek) {
    $aantalZwemmers = $zwemmers[$teller];

    echo "$plek hebben $aantalZwemmers zwemmers <br>";
    $teller++;
    $aantalPlaatjes = floor($aantalZwemmers / 5);
    for ($i = 0; $i < $aantalPlaatjes; $i++) {

        echo "<img src= 'zwem.jpg'>";

    }
    echo "<br>";
}
?>
</body>
</html>
