<?php

require_once __DIR__ . '/vendor/autoload.php';

require_once "./modules/database/db.php";
require_once "./modules/database/accounts/accountModel.php";
require_once "./modules/applyJsonMergePatch.php";
require_once "./modules/generateId.php";
require_once "./modules/passwordGestion.php";

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