<?php


$inlogUsernames = [

    "piet@worldonline.nl" => "doetje123",

    "truushendriks@wegweg.nl" => "snoepje777",

    "Piet" => "arkiearkie201"
];

if (array_key_exists($_POST['E-mailadres'], $inlogUsernames) && $inlogUsernames[$_POST['E-mailadres']] === $_POST['Wachtwoord']) {

    echo "Hij is er!!!!";

} else {

    echo "Geen toegang";

}







