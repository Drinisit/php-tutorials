<?php

 if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["firstName"]) && isset($_POST["lastName"])){
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];

    echo "<h3> Hello $firstName $lastName <h3/>";
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
        <button type="submit">Submit</button>
    </form>
    
 </body>
 </html>