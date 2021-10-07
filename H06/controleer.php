<?php
session_start();
//print_r($_POST);
$servername = "localhost";
$dbname = "phpschool";
$username = "root";
$password = "";
if(isset($_POST["E-mailadres"])) {
    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = 'SELECT * FROM Banana WHERE email = "' . $_POST["E-mailadres"] . '" AND Wachtwoord = "' . $_POST["Wachtwoord"] . '"';
    $result = $conn->query($sql);
//    print_r($result);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "email: " . $row["email"] . " ww: " . $row ["wachtwoord"] . " ";

            echo "Welkom";
        }
    } else {
        echo "Verkeerde gegevens<br> Probeer opnieuw";
    }
    $conn->close();
//$stmt = $conn->prepare($query) or die("ERROR 1.");
//$stmt->execute() or die("ERROR 2.");
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
<form name="login" class="form"  method="post">
    E-mailadres <input type="email" name="E-mailadres" value=""><br><br>
    Wachtwoord <input type="password" name="Wachtwoord" value=""> <br> <br>
    <input type="submit" name="submit" value="login">
</form>

</body>
</html>


