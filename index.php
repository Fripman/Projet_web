<?php

require_once __DIR__ . '/vendor/autoload.php';


require_once "./modules/database/offers/offerController.php";

$oC = new OfferController();

print_r($oC->get("O0001"));

print_r($oC->create([
    'id' => '555',
    'duration' => 6,
    'creationDate' => '2023-04-01',
    'currentPlaces' => 2,
    'remunarationBasis' => 1000,
    'compagnyId' => 'C0001',
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
    ]
]));

print_r($oC->update("555", [
    "duration" => 15
]));

//print_r($oC->delete("555"));


// require_once './modules/database/companies/companyController.php';

// $cC = new CompanyController();

// print_r($cC->get("O0002"));

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