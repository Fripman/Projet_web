<?php

require_once __DIR__ . '/vendor/autoload.php';

$serverApi = new \MongoDB\Driver\ServerApi(\MongoDB\Driver\ServerApi::V1);

$client = new \MongoDB\Client(
    'mongodb+srv://projetweb:fsM9N4HWvqggrdcG@cluster0.irt84.mongodb.net/?retryWrites=true&w=majority',
    [],
    ['serverApi' => $serverApi]
);
$db = $client->projetweb;

$data = $db->accounts->findOne([
    'id' => '1679347042459457'
]);
echo $data;

/*
# Create an Expess PHP app...
global $app;
$app = new Express();
# Require Configuration file...
require_once "config.php";
# Define app routes... 
require_once "routes/Apis.php";
require_once "routes/Web.php";*/