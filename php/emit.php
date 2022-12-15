<?php
include ('vendor/autoload.php');

use ElephantIO\Client;

$url = 'http://localhost:3000';
$client = new Client(Client::engine(Client::CLIENT_3X, $url));
$client->initialize();
$client->emit('newuser', ['message' => 'hello']);
echo "Emit message from php";
