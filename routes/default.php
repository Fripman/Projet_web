<?php

require_once "./modules/database/accounts/accountController.php";
require_once "./modules/express-php/Express.php";

$app->get('/', function (Request $req, Response $res) {
	global $app;
	$user = $app->getUser($req);
	if ($user)
		$res->render('search', array('pageType' => 'search', 'title' => 'Recherche'));
	else {
		$res->redirect("/login");
	}
});

$app->get('/login', function ($req, $res) {
	global $app;
	$user = $app->getUser($req);
	if ($user)
		$res->redirect("/");
	else
		$res->render('login', array('pageType' => 'login', 'title' => 'Connexion'));

});

$app->get('/gestion-offers', function ($req, $res) {
	$res->render('gestion-offers', array('pageType' => 'gestion-offers', 'title' => 'Gestion des offres'));
});

$app->get('/my-applies', function ($req, $res) {
	$res->render('my-applies', array('pageType' => 'my-applies', 'title' => 'Gestion de mes candidatures'));
});

$app->get('/gestion-applies', function ($req, $res) {
	$res->render('gestion-applies', array('pageType' => 'gestion-applies', 'title' => 'Gestion des candidatures'));
});

$app->get('/create-account', function ($req, $res) {
	$res->render('create-account', array('pageType' => 'create-account', 'title' => 'Créer un compte'));
});

$app->get('/profile', function ($req, $res) {
	$res->render('profile', array('pageType' => 'profile', 'title' => "Profil de || Mon profil"));
});

$app->get('/gestion-accounts', function ($req, $res) {
	$res->render('gestion-accounts', array('pageType' => 'gestion-accounts', 'title' => "Profil de || Mon profil"));
});

$app->get('/gestion-companies', function ($req, $res) {
	$res->render('gestion-companies', array('pageType' => 'gestion-companies', 'title' => "Gestion des entreprises"));
});


$app->get('/403', function ($req, $res) {
	$res->status(403);
	$res->render('403', array('pageType' => '403', 'title' => "Accès refusé"));
});

$app->get('/404', function ($req, $res) {
	$res->status(404);
	$res->render('404', array('pageType' => '404', 'title' => "Page introuvable"));
});