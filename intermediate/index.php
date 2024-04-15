<?php

declare(strict_types=1);

require_once './Transaction.php';

$transaction = new Transaction(100, 'This is a transaction');
$transaction->addTax(50);


var_dump($transaction->amount);