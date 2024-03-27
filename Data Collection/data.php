<?php
$url = 'https://dev.azure.com/bladesbh/Project1/_apis/wit/workitems/1?api-version=7.1-preview.3';

$token = 'BLANK';

$headers = [
    'Authorization: Basic ' .base64_encode(":" . $token),
    'Content-Type: application/json',
];

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if ($response === false) {
    echo 'cURL Error: ' . curl_error($ch);
} else {
    var_dump($response);
    $data = json_decode($response, true);
    var_dump($data);
}

curl_close($ch);
