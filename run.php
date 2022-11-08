<?php

use KH007\Client\Client;

require __DIR__ . '/vendor/autoload.php';

$client = new Client();

$client->listMeFizzBuzz(100);
// $client->listMeFizzBuzz2(100);