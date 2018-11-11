<?php

require 'vendor/autoload.php';

define('SITE_URL', 'http://lexspay.io');

$paypal = new \PayPal\Rest\ApiContext(
	new \PayPal\Auth\OAuthTokenCredential(
		getenv('PAYPAL_APPID'), getenv('PAYPAL_SECRET')
	)
);