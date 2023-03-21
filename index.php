<?php
function my_custom_autoloader($class_name)
{
    $file = './modules/mongodb-php/src/' . $class_name . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
}

// add a new autoloader by passing a callable into spl_autoload_register()
spl_autoload_register('my_custom_autoloader');
$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->demo->beers;

# Require Express PHP Framework...
require_once './modules/express_modules/';

# Create an Expess PHP app...
global $app;
$app = new Express();

# Require Configuration file...
require_once "config.php";

# Define app routes... 
require_once "routes/Apis.php";
require_once "routes/Web.php";