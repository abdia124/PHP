<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arguments</title>
</head>
<body>
<?php

function divisible($a){
    if($a % 3 == 0)  {
        return true ;
    } else {
        return false;
    }
}
echo divisible(9);
?>
</body>
</html>