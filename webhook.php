<!DOCTYPE html>
<html>
<body>

<?php
    require_once "vendor/autoload.php";
    $mollie = new Mollie\Api\MollieApiClient();
    $mollie->setApiKey("test_djMStRFvKuTbamgd6s9HzrJE2jPDTJ");
    $payment = $mollie->payments->get($_POST["id"]);
    echo $payment;
?>




</body>
</html>
