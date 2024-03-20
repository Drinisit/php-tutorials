<?php

    function Ade(){
        echo "Kaya mo yan!";
    }

    function Addition($x, $y){
        $add = $x + $y;
        echo $add;
    }

    function Auto($car, $price){
        if(strtolower($car) == 'BMW' && $price == 100000){
            return "Too expensive";
        }elseif($car == 'Honda' && $price <= 99999){
            return "Good price";
        }else{
            return "We dont have budget for that car";
        }
    }

    

    // echo "<br/>";
    // Addition(5,6);
    

?>