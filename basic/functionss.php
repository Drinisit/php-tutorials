<?php

declare(strict_types=1);

// function foo(int|float $x, int|float $y){
//     return $x + $y;
// }


function sum(...$numbers): int | float{
    $sum = 0;

    foreach($numbers as $number){
        $sum += $number;
    }

    return $sum;
}

echo sum( 50, 100,67). "<br>";



function foo(int $x, int $y): int |float {
    if($x % $y == 0){
        return $x / $y;
    }
    return $x;
}

$x = 6;
$y = 3;

echo foo( x: $x, y: $y);
// echo foo(3.5,5);