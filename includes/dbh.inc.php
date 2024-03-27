<?php

    $dsn = "mysql:host=localhost;dbname=phptutorial";
    $dbusername = "root";
    $dbpassword = "";

    try {
        //this line is to connect to database
        $pdo = new PDO( $dsn, $dbusername, $dbpassword);
        //to see if the is an error
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        //display message for an error
        echo "Connection failed: ". $e->getMessage();
    }
