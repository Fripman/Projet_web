<?php

require_once "./modules/database/accounts/accountController.php";

$app->get('/', function ($req, $res) {
	global $app;
	if (isset($_COOKIE["token"])) {
		$userId = $app->redis->get($_COOKIE["token"]);
		if ($userId !== null) {
			$aC = new AccountController();
			print_r($aC->get($userId));
		}
	} else
		echo "No user!";
	//$res->render('search', array('title' => 'Recherche'));
});

$app->get('/login', function ($req, $res) {
	global $app;
	if (!isset($_COOKIE["token"]) || $app->redis->get($_COOKIE["token"] === null)) {
		$token = bin2hex(random_bytes(16));
		setcookie('token', $token, time() + 60 * 60 * 24 * 30, '/', '.fripman.fr', true, true);
		$app->redis->set($token, "4857392847592847");
		echo "User set!";
	} else
		echo "User already set!";
	//$res->render('login', array('title' => 'Connexion'));
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

$app->get('/profil/id', function ($req, $res) {
	$res->render('profil', array('title' => "Profil de || Mon profil"));
});

$app->get('/gestion-accounts', function ($req, $res) {
	$res->render('gestion-accounts', array('title' => "Profil de || Mon profil"));
});