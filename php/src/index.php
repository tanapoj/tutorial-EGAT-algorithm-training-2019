<?php

use GuzzleHttp\Client;

require __DIR__ . '/../vendor/autoload.php';

$endpoint = "https://swapi.co/api/people/1";
$client = new Client();

$response = $client->request('GET', $endpoint, ['query' => [
    'id' => 1
]]);
$statusCode = $response->getStatusCode();
$content = $response->getBody();

print_r($content);