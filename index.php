<?php

require_once __DIR__ . '/vendor/autoload.php';

# Require Express PHP Framework...
require_once './modules/express-php/Express.php';


/*$serverApi = new \MongoDB\Driver\ServerApi(\MongoDB\Driver\ServerApi::V1);
$client = new \MongoDB\Client(
'mongodb+srv://projetweb:fsM9N4HWvqggrdcG@cluster0.irt84.mongodb.net/?retryWrites=true&w=majority',
[],
['serverApi' => $serverApi]
);
$db = $client->projetweb;
$data = $db->accounts->findOne([
'id' => '1679347042459457'
]);
var_dump($data);*/

# Create an Expess PHP app...
global $app;
$app = new Express();

echo __DIR__ . '/' . 'templates/home.tpl';

# Require Configuration file...
require_once "config.php";

# Define app routes... 
require_once "routes/home.php";