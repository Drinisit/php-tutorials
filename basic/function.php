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

    function my_greeting($fname, $lname){ 
        echo "Goodmorning $fname $lname";
    }

   function sum($num3, $num4){
    return $num3 + $num4;
   }

  // echo sum(3,5);


   function sub($num1, $num2){
    return $num1 - $num2;
   }

   function multi($num1, $num2){
    return $num1 * $num2;
   }

   function division($number1, $number2){
    return $number1 / $number2;
   }



   echo sub(10,5);

    

    // echo "<br/>";
    // Addition(5,6);
    

?>