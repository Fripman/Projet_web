<?php

require_once __DIR__ . '/vendor/autoload.php';


require_once "./modules/database/db.php";

global $dbClient;


$collection = $dbClient->selectCollection("projetweb", "companys");

var_dump($collection->find());


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