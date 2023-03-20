<?php

# Require Express PHP Framework...
require_once 'Express.php';

# Create an Expess PHP app...
global $app;
$app = new Express();

# Require Configuration file...
require_once "config.php";

# Define app routes... 
require_once "routes/Apis.php";
require_once "routes/Web.php";