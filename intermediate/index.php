<?php

declare(strict_types=1);

require_once './Transaction.php';

$amount =( new Transaction(100, 'This is a transaction'))
    ->addTax(50)
    ->applyDiscount(10)
    ->getAmount();

var_dump($amount);