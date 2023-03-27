<?php

require_once "./modules/database/accounts/accountController.php";

//Accounts
$app->get('/api/v1/accounts', function ($req, $res) {
    global $app;
    $aC = new AccountController($app->dbClient);
    $jsonResponse = [];
    $filter = [];

    if (isset($_GET["promoId"])) {
        $filter["promos"] = [["promoId" => $_GET["promoId"]]];
    }

    // if ($req->user->permissions === "tutor") {
    //     $filter["permissions"] = "student";
    // }

    $jsonResponse["accounts"] = [$aC->getWithFilter($filter)];

    $res->send(
        json_encode($jsonResponse),
        array(
            'Content-type' => 'application/json'
        )
    );
});

$app->post('/api/v1/accounts', function ($req, $res) {

});

$app->patch('/api/v1/accounts', function ($req, $res) {

});

$app->delete('/api/v1/accounts', function ($req, $res) {

});


//Companies
$app->get('/api/v1/companies', function ($req, $res) {

});

$app->post('/api/v1/companies', function ($req, $res) {

});

$app->patch('/api/v1/companies', function ($req, $res) {

});

$app->delete('/api/v1/companies', function ($req, $res) {

});


//Offers
$app->get('/api/v1/offers', function ($req, $res) {

});

$app->post('/api/v1/offers', function ($req, $res) {

});

$app->patch('/api/v1/offers', function ($req, $res) {

});

$app->delete('/api/v1/offers', function ($req, $res) {

});