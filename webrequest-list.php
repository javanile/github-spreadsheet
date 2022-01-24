<?php

use GuzzleHttp\Client;

$client = new Client();

$user = $_GET['user'] ?? 'javanile';

$url = 'https://api.github.com/users/'.$user.'/repos?per_page=100';

$response = $client->request('GET', $url);

$repositories = json_decode($response->getBody()->getContents(), true);

foreach ($repositories as $repository) {
  echo $repository['full_name'].PHP_EOL;
}
