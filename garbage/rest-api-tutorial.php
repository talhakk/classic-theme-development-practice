<?php


/**
 * Curl Request Example with Authorization Headers
 * https://tutorialsclass.com/php-rest-api-get-data-using-curl/
 */
$requestPayload = [
    'code' => 'string',
    'facilityCodes' => ['string']
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://subdomain.unicommerce.com/services/rest/v1/oms/saleorder/get");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($requestPayload));  //Post Fields
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$headers = [
    'Content-Type: application/json',
    'Authorization: Bearer b30f3aea-7978-49bb-9ea7-33eddfc80afa',
];

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec ($ch);

curl_close ($ch);

var_dump($response);


    
