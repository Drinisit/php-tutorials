<?php

declare(strict_types=1);

function foo(int|float $x, int|float $y){
    return $x + $y;
}

echo foo(3.5,5);