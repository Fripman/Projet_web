<?php


// GET HTTP REQUEST

$app->get('/', function ($req, $res) {
	echo '2';
	$res->render('home', array('title' => 'Home'));
});