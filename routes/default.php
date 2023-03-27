<?php

require_once "./modules/database/accounts/accountController.php";
require_once "./modules/express-php/Express.php";

$app->get('/', function (Request $req, Response $res) {
	global $app;
	$user = $app->getUser($req);
	if ($user)
		$res->render('search', array('title' => 'Recherche'));
	else {
		$res->redirect("/login");
	}
});

$app->get('/login', function ($req, $res) {
	$res->render('login', array('title' => 'Connexion'));
});

$app->get('/gestion-offers', function ($req, $res) {
	$res->render('gestion-offers', array('title' => 'Gestion des offres'));
});

$app->get('/my-applies', function ($req, $res) {
	$res->render('my-applies', array('title' => 'Gestion de mes candidatures'));
});

$app->get('/gestion-applies', function ($req, $res) {
	$res->render('gestion-applies', array('title' => 'Gestion des candidatures'));
});

$app->get('/create-account', function ($req, $res) {
	$res->render('create-account', array('title' => 'Créer un compte'));
});

$app->get('/profil', function ($req, $res) {
	$res->render('profil', array('title' => "Profil de || Mon profil"));
});

$app->get('/gestion-accounts', function ($req, $res) {
	$res->render('gestion-accounts', array('title' => "Profil de || Mon profil"));
});

$app->get('/gestion-companies', function ($req, $res) {
	$res->render('gestion-companies', array('title' => "Gestion des entreprises"));
});