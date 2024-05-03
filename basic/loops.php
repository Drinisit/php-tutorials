<?php

//while


// $i = 0;

// while ($i <= 15){
//     echo $i++ . "<br>";
// }

//do-while


//for

// $text = 'Hello world';


//count can return the number of array
$text = ['a','b','c','d','e','f','g'];



$lenght = count($text);

for($i = 0; $i < $lenght; $i++){
    echo $text[$i] . "<br>";
    
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

//foreach

$programmingLanguage = ['Javascript', 'C++', 'Python','Cobol','Rust', 'PHP', "JAVA"];

foreach($programmingLanguage as $key => $pl){
    echo $key . ": ". $pl. "<br>";
}