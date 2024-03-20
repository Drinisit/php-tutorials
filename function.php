<?php

    function Ade(){
        echo "Kaya mo yan!";
    }

    function Addition($x, $y){
        $add = $x + $y;
        echo $add;
    }

    function Auto($car, $price){
        if($car == 'BMW' && $price == 100000){
            return "Too expensive";
        }elseif($car == 'Honda' && $price >= 50000){
            return "Good price";
        }else{
            return "We dont have budget for that car";
        }
    }

    echo Auto('Honda', 70000);

    // echo "<br/>";
    // Addition(5,6);
    

?>