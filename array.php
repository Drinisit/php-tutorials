<?php

   $brands = array("honda", "toyota","suzuki","ford","nissan");

   // echo $brands[2];

   $users = ['john', 'dave', 'tim'];


   $num = [1,2,4,6,7,5,10,8,9,3];
   rsort($num);

   if(in_array("toyotas", $brands)){
      echo "There is toyota";
   }else{
      echo "Out of stock";
   }

 
   // $total = count($brands);

   // echo "Number of cars ".$total;

   // for($total = 0; $total < count($brands); $total++){
   //       echo "The car brand is ".$brands[$total]."<br/>";
   // }

   // for($i = 0;$i < count($users);$i++)
	// echo $users[$i]."\n";


   // do{
   //    echo "The car brand is ".$brands[$total]."<br/>";
   //    $total++;
   // }while($total < count($brands));

   // while($total < count($brands)){
   //    echo "The car brand is ".$brands[$total]. "<br/>";
   //    $total++;
   // }

   // foreach($brands as $cars){
   //    echo "The brands of car is ".$cars. "<br/>";
   // }
   
?>
