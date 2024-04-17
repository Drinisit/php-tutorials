<?php

require_once './PaymentProfile.php';
require_once './Customer.php';
require_once './Transaction.php';

$transaction = new Transaction2(5, 'Test');

echo $transaction->customer?->paymentProfile->id;
