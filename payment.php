<?php
    require_once "vendor/autoload.php";
    $amount = floatval($_POST["amount"]);
    $double = bcadd($amount,'0',2);
    $mollie = new Mollie\Api\MollieApiClient();
    $mollie->setApiKey("test_djMStRFvKuTbamgd6s9HzrJE2jPDTJ");
    $paymentLink = $mollie->paymentLinks->create([
        "amount" => [
            "currency" => "EUR",
            "value" => $double,
        ],
        "description" => "Testing outspot",
        "expiresAt" => "2023-06-06T11:00:00+00:00",
        "redirectUrl" => "http://localhost/outspot/index.php",
    ]);
    $link = $paymentLink->getCheckoutUrl();
    header('Location: ' . $link);

