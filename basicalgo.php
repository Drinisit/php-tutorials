<?php

// 2. Write a PHP program to get the absolute difference between n and 51. If n is greater than 51 return triple the absolute difference.
// Sample Input:
// 53
// 30
// 51
// Sample Output:
// 6
// 21
// 0

    // function diff($n){
    //     $x = 51;
    //     if($n > $x ){
    //         return ($n - $x)*3;
    //     }else{
    //         return $x - $n ;
    //     }

     
    // };

    //echo diff(51);

//     3. Write a PHP program to check two given integers, and return true if one of them is 30 or if their sum is 30.
// Sample Input:
// 30, 0
// 25, 5
// 20, 30
// 20, 25
// Sample Output:
// bool(true)
// bool(true)
// bool(true)
// bool(false)

    function sum($x, $y){
       
        return ($x == 30) || ($y == 30) ||($x + $y == 30);
    }

    var_dump(sum(30,0));
   
