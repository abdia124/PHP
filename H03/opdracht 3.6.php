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
        img{
            width: 40px;
        }
    </style>
</head>
<body>
<?php

$zwemmers = array("25", "32", "11", "23");

$plekken = array("De spartelkuikens", "De_waterbuffels", "Plonsmderin", "Bommetje" );

foreach ($plekken as $plek){
foreach ($zwemmers as $zwemmer) {
    echo "$plek hebben $zwemmer zwemmers"; //$zwemmers[0];
    for ($i = 4; $i < $zwemmer; $i = $i + 5) {

        echo "<img src= 'zwem.jpg'>";

    }
}}
?>
</body>
</html>
