<?php

//when strict type is declared it will prevent php from converting the value and i will stick to it as it is that is why there is an error if the strict type is declared.
declare(strict_type=1);

function sum(int $x, int $y){
    return $x + $y;
}


//without strict types php will convert string into int.
$sum = sum( '3', 4);

echo $sum;