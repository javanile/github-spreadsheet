<?php

use GuzzleHttp\Client;

$client = new Client();

$user = $_GET['user'] ?? 'javanile';

$response = $client->request('GET', 'https://api.github.com/users/'.$user.'/repos');

$json = json_decode($response->getBody(), true);

echo $json['name'];
