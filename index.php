<?php

require_once __DIR__ . '/vendor/autoload.php';

# Require MongoDBClient
require_once __DIR__ . "/modules/database/db.php";

# Require Express PHP Framework...
require_once __DIR__ . '/modules/express-php/Express.php';

# Create an Expess PHP app...
global $app;
$app = new Express($dbClient);

# Require Configuration file...
require_once __DIR__ . "/config.php";



# Define app routes... 
require_once __DIR__ . "/routes/default.php";
require_once __DIR__ . "/routes/api/v1/api.php";