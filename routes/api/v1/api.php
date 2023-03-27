<?php

require_once "./modules/database/accounts/accountController.php";
require_once "./modules/passwordGestion.php";
require_once "./modules/express-php/Express.php";

//Authentification

$app->get('/api/v1/authentification', function (Request $req, Response $res) {
    if (isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["rememberMe"])) {
        global $app;
        $aC = new AccountController($app->dbClient);
        $account = $aC->getWithFilter(["username" => $_POST["username"]])[0];
        if (checkPassword($_POST["password"], $account->salt, $account->hash)) {
            $token = bin2hex(random_bytes(16));
            if (isset($_POST["rememberMe"]) == true) {
                $res->setCookie('token', $token, time() + 60 * 60 * 24 * 30);
            } else {
                $res->setCookie('token', $token, 0);
            }
            $app->redis->set($token, "4857392847592847");
            $res->setSession("successedConnection", "true");
            $res->redirect("/");
        } else {
            $res->setSession("successedConnection", "false");
            $res->redirect("/login");
        }
    }
});

//Accounts
$app->get('/api/v1/accounts', function ($req, $res) {
    global $app;
    $aC = new AccountController($app->dbClient);
    $jsonResponse = [];
    $filter = [];

    if (isset($_GET["promoId"])) {
        $filter["promos.promoId"] = $_GET["promoId"];
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
    global $app;
    $json = file_get_contents('php://input');
    $data = json_decode($json);
    $aC = new AccountController($app->dbClient);
    $result = $aC->create($data);
    $res->send(
        json_encode(["statut" => $result]),
        array(
            'Content-type' => 'application/json'
        )
    );
});

$app->patch('/api/v1/accounts', function ($req, $res) {
    global $app;
    $json = file_get_contents('php://input');
    $data = json_decode($json);
    $aC = new AccountController($app->dbClient);
    if (isset($data["id"])) {
        $result = $aC->update($data["id"], $data);
    } else
        $result = false;

    $res->send(
        json_encode(["statut" => $result]),
        array(
            'Content-type' => 'application/json'
        )
    );
});

$app->delete('/api/v1/accounts', function ($req, $res) {
    global $app;
    $json = file_get_contents('php://input');
    $data = json_decode($json);
    $aC = new AccountController($app->dbClient);
    if (isset($data["id"])) {
        $result = $aC->delete($data["id"]);
    } else
        $result = false;

    $res->send(
        json_encode(["statut" => $result]),
        array(
            'Content-type' => 'application/json'
        )
    );
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