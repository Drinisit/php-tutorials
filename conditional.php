<?php

$score = 95;

if( $score >= 90){
    echo "A";
    if( $score >= 95){
        echo "+";
    }
}elseif( $score >= 85){
    echo "B";
}
else{
    echo "Try harder";
}