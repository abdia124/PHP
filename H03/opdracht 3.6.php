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
</head>
<body>
<?php

$zwemmers = array("25", "32", "11","23");

$De_spartelkuikens = 25;
$De_waterbuffels = 32;
$Plonsmderin = 11;
$Bommetje = 23;

for ($i = 5; $i < 32; $i=$i+5)
{ echo "<img src= 'zwem.jpg".$i."'>";}
{
echo "de Spartelkuikens hebben  zwemmers"."$i". $zwemmers[0];


}
?>
</body>
</html>
echo "<img src= 'zwem.jpg".$i."'>";