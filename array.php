<?php

   $brands = array("honda", "toyota","suzuki","ford","nissan");

   $total = count($brands);

 echo "The total of cars is ". $total;

 for($x = 0; $x < $total; $x++){
    echo $brands[$x]. "<br/>";
 }

?>
