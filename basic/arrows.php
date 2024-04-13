<?php

// function sum(int|float ...$numbers): int|float{
//     return array_sum($numbers);
// }

// echo sum(1,2,4,5);

$sum = function (int|float ...$numbers): int|float{
    return array_sum($numbers);
};

echo $sum(1,2,4,5) . "<br>";



//arrow function
$array = [1,2,3,4,5];

$y = 5;

$array2 = array_map(fn($number)=> $number * $number * $y, $array);

echo "<pre>";
print_r($array2);
echo "</pre>";