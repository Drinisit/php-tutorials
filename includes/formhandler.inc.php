<?php

    if($_SERVER["REQUEST_METHOD" == "POST"]){
        $username = $_POST["username"];
        $pwd = $_POST["pwd"];
        $email = $_POST["email"];

        try {
           require_once "dbh.inc.php";

           $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email);";


           //stmt meaning statement
           $stmt = $pdo->prepare($query);

            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":pwd", $pwd);
            $stmt->bindParam(":email", $email);

           $stmt->execute();


           //for closing
           $pdo = null;
           $stmt = null;

            //for error message to stop running
           die();

            //send the user from frontpage
           header("Location: ../index.php");

        } catch (PDOException $e) {
           die("Query failed: ". $e->getMessage());
        }

    }else{
        header("Location: ../index.php");
    }