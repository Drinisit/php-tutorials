<?php

 if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["firstName"]) && isset($_POST["lastName"]) && isset($_POST["email"])){
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];

    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<h3> Hello $firstName $lastName Your $email is Valid<h3/>";
    }else{
        echo "<h3> Hello $firstName $lastName Your $email is Invalid<h3/>";
    }
 }

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    
    <form action="home.php" method="post">
        <input type="text" name="firstName" placeholder="First Name"><br>
        <input type="text" name="lastName" placeholder="Last Name"><br>
        <input type="text" name="email" placeholder="Email"><br>
        <button type="submit">Submit</button>
    </form>
    
 </body>
 </html>