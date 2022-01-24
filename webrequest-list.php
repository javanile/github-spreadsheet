<?php

use GuzzleHttp\Client;

$client = new Client();

$user = $_GET['user'] ?? 'javanile';

$response = $client->request('GET', 'https://api.github.com/users/'.$user.'/repos');

var_dump($response->getBody()->getContents());

//$json = json_decode(, true);

//echo $json['name'];
