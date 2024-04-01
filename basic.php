<?php
// $x = 5;

// for($i = 1; $i <= $x ; $i++){
    
//     if($i < $x){
//         echo "$i-";
//     }else{
//         echo $i . "\n";
//     }
// }

function addition($num1, $num2){
    if($num1 <= 30 && $num2 <=30){
        $add = $num1 + $num2;
        return $add;
    }else{
        echo "The number is too high cannot be add";
    }
}

echo addition(4,31);
