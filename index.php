<?php

require_once __DIR__ . '/vendor/autoload.php';


require_once "./modules/database/accounts/accountController.php";

$aC = new AccountController();

print_r(
    $aC->create(
        [
            "center" => "Lyon",
            "id" => "4857392847592847",
            "name" => "Emma",
            "offerPostulations" => [],
            "permissions" => "student",
            "postulationNotifications" => [["test"]],
            "promos" => [
                "promoId" => "CA21P201",
                "type" => "S3E",
                "year" => 5
            ],
            "surname" => "Bernard",
            "username" => "emma.bernard@viacesi.fr",
            "wishlist" => [],
            "hash" => "9fe3258be142b3184ec2f0c92479b76dca032095083d77cbb9d308106df1c7d6",
            "salt" => "20a6709a3c7ee6cf46ee1cfea4a63cec"
        ]
    )
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