<?php

// function sum(int|float ...$numbers): int|float{
//     return array_sum($numbers);
// }

// echo sum(1,2,4,5);

$sum = function (int|float ...$numbers): int|float{
    return array_sum($numbers);
};

echo $sum(1,2,4,5);