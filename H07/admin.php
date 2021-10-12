<?php
session_start();

if($_SESSION["user"] && $_SESSION["user"]["rol"] == "Administrator") {
    echo "<h1> Welkom ".$_SESSION["user"]["naam"]. " op het admingedeelte van de website</h1>" ;
    echo "<p><a href='index.php'>Login</a></p>"
    ;
}
else{
    header('location: index.php');
}
