<?php

require_once __DIR__ . '/vendor/autoload.php';


require_once "./modules/database/offers/offerController.php";

$oC = new OfferController();

print_r(
    $oC->update("1679848673844291", [
        "duration" => 15,
        "expectedSkills" => [
            [
                "name" => "JS"
            ],
            [
                "name" => "PHP"
            ]
        ]
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