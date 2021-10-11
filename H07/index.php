<?php
session_start();
$users = array(
    "janjaap" => "1234",
    "bert" => "1235",
    "jans" => "1236"
);

if (isset($_POST['knop'])
    && isset($users[$_POST["login"]])
    && $users[$_POST["login"]] == $_POST['pwd']) {
    $_SESSION["user"] = $_POST["login"];
    $message = "welkom". $_SESSION['user'];
} else {
    $message = "Inloggen";
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1> <?php echo $message; ?></h1>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" class="form" method="post">
    E-mailadres <input type="email" name="E-mailadres" value=""><br><br>
    Wachtwoord <input type="password" name="Wachtwoord" value=""> <br> <br>
    <input type="submit" name="submit" value="login">
</form>
<form name="login" class="form" method="post">
    E-mailadres <input type="email" name="E-mailadres" value=""><br><br>
    Wachtwoord <input type="password" name="Wachtwoord" value=""> <br> <br>
    <input type="submit" name="submit" value="login">
</form>
</body>
</html>