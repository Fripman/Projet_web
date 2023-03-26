<?php

require_once __DIR__ . '/vendor/autoload.php';


require_once "./modules/database/accounts/accountController.php";

$aC = new AccountController();

print_r(
    $aC->update("1679851202290535", [
        "surname" => "Bernard2",
        "center" => "Caen"
    ])
);

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
require_once "routes/api/v1/api";*/