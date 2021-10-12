<?php
session_start();

if(isset($_SESSION["user"])) {
echo "<h1> Welkom ".($_SESSION["user"]["naam"]). " is op deze website </h1>" ;
echo "<p><a href='index.php'>Login</a></p>";
}
else{
header('location: index.php');
}