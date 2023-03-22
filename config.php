<?php

# Configure Express PHP app...

/**
 * Set Express router's base path
 */
$app->set('basePath', '');

/**
 * Set Express view engine
 */
$app->set('view engine', 'smarty');

/**
 * Set Express views path
 */
$app->set('views', __DIR__ . '/templates');

/**
 * Set Express static files path
 */
$app->set('static', 'public/');


/**
 * Disable template caching
 */
$app->set('view cache', FALSE);

/**
 *  Set App Global variable
 */


$app->setGlobal('appName', 'Stage CESI');


/**
 * Inject the app object into the view.
 */

$app->setGlobal('app', $app);

/*
 * Import Express Modules
 */