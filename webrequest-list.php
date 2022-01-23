<?php

use GuzzleHttp\Client;

$client = new Client();

$response = $client->request('GET', 'https://api.github.com/zen');

$json = json_decode($response->getBody(), true);

echo $json['name'];
