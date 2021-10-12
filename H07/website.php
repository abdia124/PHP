<?php
session_start();

if(isset($_SESSION["user"])) {
echo "<h1> welkom</h1>".($_SESSION["user"]). " is op deze website";
}
else{
header('location: index.php');
}