<?php

$x = 10;
$y = 4;

var_dump($x != $y);
var_dump($x !== $y);

// $z = $x + $y;

// echo $z;

echo "<br>";

$a = "Hello";
$b = strpos($a, 'H');

if($b === false){
    echo "H is not found";
}else{
    echo "H is found " . $b;
}

echo "<br> Ternary Operator";

$result = $y === false ? "H is not found" : "H is found" . $y;
echo "<br>" . $result;



