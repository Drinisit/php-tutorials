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
echo "<br>";
echo "<br>";
echo "<br>";

$brand = ['toyota' => 1, 'honda' => 2,'nissan'=> 3, 'BMV' => 4];
$carType = ['van' => 5,'pickup'=> 6,'sedan'=> 7];

$cars = $brand + $carType;
print_r($cars);





