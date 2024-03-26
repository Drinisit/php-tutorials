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

    function diff($n){
        $x = 51;
        if($n > $x ){
            return ($n - $x)*3;
        }else{
            return $x - $n ;
        }

     
    };

    echo diff(51);
   
