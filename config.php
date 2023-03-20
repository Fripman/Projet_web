<?php

# Configure Express PHP app...

/**
 * Set Express router's base path
 */
$app->set('basePath', '/');

/**
 * Set Express view engine
 */
$app->set('view engine', 'smarty');

/**
 * Set Express views path
 */
$app->set('views', 'templates/');

/**
 * Set Express static files path
 */
$app->set('static', 'public/');


/**
 *  Set App Global variable
 */


$app->setGlobal('appName', 'Projet Web');


/**
 * Inject the app object into the view.
 */

$app->setGlobal('app', $app);

/*
 * Import Express Modules
 */


# Import database module...
$app->import('ExpressORM');



/**
 * Connect to database
 */

$app->_ExpressORM->Instance('localhost', 'root', '', 'revo');
if (!$app->_ExpressORM->CheckInstance())
	throw new Exception("Database Error: Unable to Connect to Database");