<?php

require_once __DIR__ . '/vendor/autoload.php';


require_once "./modules/database/companies/companyController.php";

$cC = new CompanyController();

print_r(
    $cC->create(
        [
            'id' => 'C0003',
            'name' => 'Entreprise C',
            'activitySector' => 'Finance',
            'visible' => false,
            'contactEmail' => 'contact@entrepriseb.com',
            'localisations' => [
                [
                    'street' => '5 avenue du Général',
                    'city' => 'Rouen',
                    'ZIPCode' => '76000',
                ]
            ],
            'pilotEvaluation' => [
                'rating' => 3,
                'comment' => 'Bonne entreprise, manque de communication'
            ],
            'pilotId' => '2398572918374029',
            'acceptedInternNb' => 2,
            'internEvaluations' => [
                [
                    'studentId' => '4857392847592847',
                    'rating' => 4,
                    'comment' => 'Bonne ambiance de travail'
                ]
            ]
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