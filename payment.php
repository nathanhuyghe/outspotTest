<?php
    require_once "vendor/autoload.php";
    $amount = floatval($_POST["amount"]);
    if (empty($amount)){
        header('Location: ' . "https://6c1e-2a02-1811-c512-9300-d34-c216-5e0c-1454.eu.ngrok.io/outspot/index.php");
    }
    else{
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
            "redirectUrl" =>"https://6c1e-2a02-1811-c512-9300-d34-c216-5e0c-1454.eu.ngrok.io/outspot/index.php",
            "webhookUrl" => "https://6c1e-2a02-1811-c512-9300-d34-c216-5e0c-1454.eu.ngrok.io/outspot/webhook.php",
        ]);
    }


