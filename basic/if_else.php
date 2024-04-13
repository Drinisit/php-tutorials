<?php


    $bool = true;
    $a = 1;
    $b = 4;

    if($a < $b){
        echo $a . " is less than ". $b;
    }

    // $num = 10;
    // $num2 = 5;
    // $num3 = 5.2;

    // if($num > $num2){
    //     echo "True";
    // }else{
    //     echo "False";
    // }

   /* $day = 'Tuesday';

    if($day == 'Friday'){
        echo 'Its weekdays';
    }elseif($day == 'Sunday'){
        echo 'Its weekend';
    }else{
        echo 'its not weekend as well not Friday';
    } */

    // $salary = 10000;

    // if($salary <= 9000){
    //     echo "Damn your poor";
    // }else{
    //     echo "Still poor";
    // }

    // $age = 18;

    // if($age < 18){
    //     echo 'Child';
    // }else{
    //     echo 'Adult';
    // }

    // $bool = true;
    // $x = 1;
    // $y = 4;

    // if($x < $y && !$bool){
    //     echo "First condition is true";
    // }elseif($x < $y && $bool){
    //     echo "The Second condition is true";
    // }else{
    //     echo "None of the condition is true";
    // }

    // $x = 10;

    // $y = $x < 6 ? "True" : "False";

    // echo $y;



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        
        .square{
            width: 10px;
            height: 10px;
            background-color: black;
        }

        .circle{
            width: 10px;
            height: 10px;
            border-radius: 5px;
            background-color: red;
        }

    </style>
</head>
<body>
    <?php
        $shape = "circl";

        // if($shape == "circle"){
        //     echo "<div class='circle'></div>";
        // }else{
        //     echo "<div class='square'></div>";
        // }

       $hugis = ($shape=='circle') ? "<div class='circle'></div>" : "<div class='square'></div>";

        echo $hugis;


    ?>
    
    
</body>
</html>