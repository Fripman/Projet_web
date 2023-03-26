<?php

$serverApi = new \MongoDB\Driver\ServerApi(\MongoDB\Driver\ServerApi::V1);
$dbClient = new \MongoDB\Client(
    'mongodb+srv://projetweb:fsM9N4HWvqggrdcG@cluster0.irt84.mongodb.net/?retryWrites=true&w=majority',
    [],
    ['serverApi' => $serverApi]
);