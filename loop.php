<?php

$text = "Hello";
    $num = 27;
    $float = 5.6;
    $boolean = true;
    $data_types =  array($text, $num, $float, $boolean);

// while($x <= 10){
//     echo "Ang bilang nato ay pang ".$x."<br/>";
//     $x++;
// }

// do{
//     echo "Ang bilang na to ay " .$x. "<br/>";
//     $x++;
// }while($x <= 8);

// for($i = 1; $i <= 5; $i++){
//     echo "Eto ay pang ". $i. "<br/>";
// }

foreach($data_types as $values){
    echo $values."<br/>";
}

?>