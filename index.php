<?php

require_once __DIR__ . '/vendor/autoload.php';

$redis = new Redis();
$redis->connect('127.0.0.1', 6379);
$response = $redis->ping();
if ($response == "+PONG") {
    echo "Redis est connecté !";
    $redis->set("5", "4857392847592847");
    var_dump($redis->get("5"));
} else {
    echo "Erreur de connexion à Redis : " . $response;
}

/*
# Require Express PHP Framework...
require_once './modules/express-php/Express.php';
# Create an Expess PHP app...
global $app;
$app = new Express();
# Require Configuration file...
require_once "config.php";
# Define app routes... 
require_once "routes/default.php";
require_once "routes/api/v1/api.php";*/