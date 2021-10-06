<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SQL en PHP</title>
</head>
<body>
<table>
<?php
$servername = "localhost";
$dbname = "phpschool";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host={$servername};dbname={$dbname}", $username, $password);

    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$query = "SELECT * FROM cursist";
$stmt = $conn->prepare($query) or die("ERROR 1.");
$stmt->execute() or die("ERROR 2.");
while ($row = $stmt->fetch()){
    echo "<tr>";
    echo "<td>" .  $row["cursistnr"]."</td>";
    echo "<td>" .  $row["cursistnr"]."</td>";
    echo "<td>" .  $row["cursistnr"]."</td>";
    echo "<td>" .  $row["cursistnr"]."</td>";
    echo "<td>" .  $row["cursistnr"]."</td>";
    echo "<td>" .  $row["cursistnr"]."</td>";
    echo "<td>" .  $row["cursistnr"]."</td>";
    echo "<td>" .  $row["cursistnr"]."</td>";

    echo "</tr>";


}


?>
</table>
</body>
</html>