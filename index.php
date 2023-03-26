<?php

require_once __DIR__ . '/vendor/autoload.php';

# Require Express PHP Framework...
require_once __DIR__ . '/modules/express-php/Express.php';

# Create an Expess PHP app...
global $app;
$app = new Express();

# Require Configuration file...
require_once __DIR__ . "/config.php";



# Define app routes... 
require_once __DIR__ . "/routes/default.php";
require_once __DIR__ . "/routes/api/v1/api.php";