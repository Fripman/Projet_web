<?php

require_once __DIR__ . '/vendor/autoload.php';


require_once "./modules/database/offers/offerController.php";

$oC = new OfferController();

print_r(
    $oC->create(
        [
            'id' => 'O0003',
            'duration' => 6,
            'creationDate' => 1679847003,
            'currentPlaces' => 2,
            'localisations' => [
                [
                    'street' => '12 rue des Lilas',
                    'city' => 'Caen',
                    'ZIPCode' => '14000',
                    'country' => 'France'
                ]
            ],
            'concernedPromos' => [
                [
                    'year' => 3,
                    'type' => 'Info'
                ],
                [
                    'year' => 4,
                    'type' => 'Info'
                ]
            ],
            'expectedSkills' => [
                [
                    'name' => 'JavaScript'
                ],
                [
                    'name' => 'HTML'
                ],
                [
                    'name' => 'CSS'
                ]
            ],
            'remunerationBasis' => 1000,
            'companyId' => 'C0001'
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