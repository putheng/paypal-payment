<?php

use PayPal\Api\{
	Payment,
	PaymentExecution
};

require 'app/start.php';

if(!isset($_GET['success'], $_GET['paymentId'], $_GET['PayerID'])){
	die();
}

if((bool)$_GET['success'] === false){
	die();
}

$paymentId = $_GET['paymentId'];
$payerID = $_GET['PayerID'];

$payment = Payment::get($paymentId, $paypal);

$execute = new PaymentExecution();
$execute->setPayerId($payerID);

try {
	$result = $payment->execute($execute, $paypal);
}catch (Exception $e){
	$data = json_decode($e->getData());
	var_dump($data);
	die();
}

echo 'Payment made, Thank you!';