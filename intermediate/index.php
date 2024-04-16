<?php

declare(strict_types=1);

require_once './Transaction.php';

// $transaction1 =( new Transaction(100, 'This is a transaction 1'))
//     ->addTax(50)
//     ->applyDiscount(10);


// $transaction2 =( new Transaction(200, 'This is a transaction 2'))
//     ->addTax(80)
//     ->applyDiscount(20);


// var_dump($transaction1->getAmount(), $transaction2->getAmount());


//destruction
$amount =( new Transaction(100, 'This is a transaction 1'))
    ->addTax(50)
    ->applyDiscount(10)
    ->getAmount();

    var_dump($amount);