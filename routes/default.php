<?php

require_once "./modules/database/accounts/accountController.php";
require_once "./modules/database/companies/companyController.php";
require_once "./modules/database/offers/offerController.php";
require_once "./modules/express-php/Express.php";

$app->get('/', function (Request $req, Response $res) {
	global $app;
	$user = $app->getUser($req);
	$display = [];
	if (isset($req->query["type"]) && $req->query["type"] === "company") {
		$display["type"] = "company";
		$cC = new CompanyController($app->dbClient);
		$display["result"] = $cC->getAll();
	} else {
		$display["type"] = "offer";
		$oC = new OfferController($app->dbClient);
		$display["result"] = $oC->getAll();
	}
	if (isset($req->query["search"])) {
		$display["result"] = array_filter($display["result"], function ($element) use ($req) {
			return strpos(strtolower($element->name), strtolower($req->query["search"]));
		});
	}
	if (isset($req->query["id"])) {
		$display["result"] = array_filter($display["result"], function ($element) use ($req, $display) {
			return $display["type"] === "company" ? $element->id === $req->query["id"] : $element->companyId === $req->query["id"];
		});
	}
	if ($user)
		$res->render('search', array('user' => $user, 'pageType' => 'search', 'title' => 'Recherche', 'display' => $display));
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
		$res->render('login', array('user' => $user, 'pageType' => 'login', 'title' => 'Connexion'));

});

$app->get('/gestion-offers', function (Request $req, Response $res) {
	global $app;
	$user = $app->getUser($req);
	if ($user) {
		if ($user->permissions === "student")
			$res->redirect("/403");
		else
			$res->render('gestion-offers', array('user' => $user, 'pageType' => 'gestion-offers', 'title' => 'Gestion des offres'));
	} else {
		$res->redirect("/login");
	}
});

$app->get('/my-applies', function (Request $req, Response $res) {
	global $app;
	$user = $app->getUser($req);
	if ($user) {
		if ($user->permissions !== "student")
			$res->redirect("/404");
		else
			$res->render('my-applies', array('user' => $user, 'pageType' => 'my-applies', 'title' => 'Gestion de mes candidatures'));
	} else {
		$res->redirect("/login");
	}
});

$app->get('/gestion-applies', function ($req, $res) {
	global $app;
	$user = $app->getUser($req);
	if ($user) {
		if ($user->permissions === "student")
			$res->redirect("/403");
		else
			$res->render('gestion-applies', array('user' => $user, 'pageType' => 'gestion-applies', 'title' => 'Gestion de mes candidatures'));
	} else {
		$res->redirect("/login");
	}
});

$app->get('/create-account', function ($req, $res) {
	global $app;
	$user = $app->getUser($req);
	if ($user) {
		if ($user->permissions === "student")
			$res->redirect("/403");
		else
			$res->render('create-account', array('user' => $user, 'pageType' => 'create-account', 'title' => 'Créer un compte'));
	} else {
		$res->redirect("/login");
	}
});

$app->get('/profile', function ($req, $res) {
	global $app;
	$user = $app->getUser($req);
	$res->render('profile', array('user' => $user, 'pageType' => 'profile', 'title' => "Profil de || Mon profil"));
});

$app->get('/gestion-accounts', function ($req, $res) {
	global $app;
	$user = $app->getUser($req);
	if ($user) {
		if ($user->permissions === "student")
			$res->redirect("/403");
		else
			$res->render('gestion-accounts', array('user' => $user, 'pageType' => 'gestion-accounts', 'title' => "Profil de || Mon profil"));
	} else {
		$res->redirect("/login");
	}
});

$app->get('/gestion-companies', function ($req, $res) {
	global $app;
	$user = $app->getUser($req);
	if ($user) {
		if ($user->permissions === "student")
			$res->redirect("/403");
		else
			$res->render('gestion-companies', array('user' => $user, 'pageType' => 'gestion-companies', 'title' => "Gestion des entreprises"));
	} else {
		$res->redirect("/login");
	}
});


$app->get('/403', function ($req, $res) {
	global $app;
	$user = $app->getUser($req);
	$res->status(403);
	$res->render('403', array('user' => $user, 'pageType' => '403', 'title' => "Accès refusé"));
});

$app->get('/404', function ($req, $res) {
	global $app;
	$user = $app->getUser($req);
	$res->status(404);
	$res->render('404', array('user' => $user, 'pageType' => '404', 'title' => "Page introuvable"));
});