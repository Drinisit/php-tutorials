<?php

 declare(strict_types=1);

 class Transaction2{

    public function __construct(
       private float $amount, 
       private string $description){
            
       echo $this->amount;

    }
        
    }
 