<?php

//var_dump($_SERVER["REQUEST_METHOD"]);

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $car = htmlspecialchars($_POST["car"]);

    echo "These are the date, that user submitted";
    echo "<br />";
    echo $firstname;
    echo "<br />";
    echo $lastname;
    echo "<br />";
    echo $car;

}
