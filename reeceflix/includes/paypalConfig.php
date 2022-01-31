<?php
require_once("PayPal-PHP-SDK/autoload.php");

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AaV0_n4_lrhr6tEY5PhkjVYKf7j90qa46nst7ragCsCQCxo7FQtd30r21-MujRNY5my6w2LLeN5JsO8z', // ClientID
        'ENA_T1mvDZm7CJOwRGVzJalDQN4lyyOjhJ5JbWBn4sk62brGt9OSUhWbEP1FMVs9TS-GknTzLCE_wJkq' // ClientSecret
    )
);
