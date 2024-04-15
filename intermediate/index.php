<?php

declare(strict_types=1);

require_once './Transaction.php';

$transaction = new Transaction(15, 'This is a transaction');


var_dump($transaction->amount);