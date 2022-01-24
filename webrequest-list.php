<?php

use GuzzleHttp\Client;

$client = new Client();

$user = $_GET['user'] ?? 'javanile';

$response = $client->request('GET', 'https://api.github.com/users/'.$user.'/repos');

$repositories = json_decode($response->getBody()->getContents(), true);

foreach ($repositories as $repository) {
  echo $repository['name'].PHP_EOL;
}
