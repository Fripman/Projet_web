<?php


// GET HTTP REQUEST

$app->get('/', function ($req, $res) {
	$res->render('templates/home', array('title' => 'Home'));
});