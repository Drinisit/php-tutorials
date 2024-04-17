<?php

 declare(strict_types=1);

 class Transaction2{

    public ?Customer $customer = null;

    public function __construct(
       private float $amount, 
       private string $description){
            

    }
        
    }
 