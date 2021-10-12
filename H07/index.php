<?php
session_start();
$users = array(
    "janjaap" => array("pwd" => "1234", "rol" => "Administrator"),
    "bert" => array("pwd" => "1235", "rol" => "Gebruiker"),
    "jans" => array("pwd" => "1236", "rol" => "Administrator"),
);
if (isset($_GET["loguit"])) {
    $_SESSION = array();
    session_destroy();
}

if (isset($_POST['knop'])
    && isset($users[$_POST["login"]])
    && $users[$_POST["login"]]["pwd"] == $_POST['pwd']) {
    $_SESSION["user"] = array("naam" => $_POST["login"],
        "pwd" => $users[$_POST['login']]['pwd'],
        "rol" => $users[$_POST['login']]['rol']);

    $message = "welkom " . $_SESSION["user"]["naam"] . " met de rol " . $_SESSION["user"]["rol"];
} else {
    $message = "Inloggen";
}
print_r($_SESSION)
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
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="form-group">
        <label for="login">Login:</label>
        <input type="text" name="login" value="">
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" name="pwd" value="">
    </div>
    <input type="submit" name="knop">
</form>
<p><a href="website.php">website</a></p>
<p><a href="admin.php">admingedeelte</a></p>
<p><a href="index.php?loguit">uitloggen</a></p>
</body>
</html>