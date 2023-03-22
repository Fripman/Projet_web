<?php

$app->get('/api/v1/', function ($req, $res) {
    $res->render('search', array('title' => 'Recherche'));
});