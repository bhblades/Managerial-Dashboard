<?php
require_once 'Vendor/guzzle-7.8/src/functions.php';
require_once 'Vendor/guzzle-7.8/src/Handler/CurlFactory.php';
require_once 'Vendor/guzzle-7.8/src/Handler/CurlMultiHandler.php';
require_once 'Vendor/guzzle-7.8/src/Handler/Proxy.php';
require_once 'Vendor/guzzle-7.8/src/Handler/StreamHandler.php';
require_once 'Vendor/guzzle-7.8/src/Middleware.php';
require_once 'Vendor/guzzle-7.8/src/PrepareBodyMiddleware.php';
require_once 'Vendor/guzzle-7.8/src/RedirectMiddleware.php';
require_once 'Vendor/guzzle-7.8/src/RetryMiddleware.php';
require_once 'Vendor/guzzle-7.8/src/TransferStats.php';
require_once 'Vendor/guzzle-7.8/src/Client.php';
require_once 'Vendor/guzzle-7.8/src/functions.php';
require_once 'Vendor/guzzle-7.8/src/functions.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

$url = 'https://dev.azure.com/bladesbh/Project1/_odata/v2.0';

$token = 'BLANK';

$client = new Client([
    'headers' => [
        'Authorization' => 'Bearer ' .$token,
        'Content-Type' => 'application/json',
    ]
]);

try {
    $response = $client->request('GET', $url . 'WorkItems');
    $data = json_decode($response->getBody()->getContents(), true);

    var_dump($data);
} catch (Exception $e) {
    echo 'Caught Exception: ', $e->getMessage(), "\n";
} catch (GuzzleException $e) {
    echo 'Caught Guzzle Exception: ', $e->getMessage(), "\n";
}