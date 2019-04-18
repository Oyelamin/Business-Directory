<?php
require_once 'Validate.php'; //Validations
require_once 'usefulFunctions.php';  //Extra use functions
$app = [];
$app['config'] = require 'config.php'; //Hide Database Password to prevent sql injection
require_once 'Router.php';   // Loads the router page 
require_once 'Request.php';  // Read the request type
require_once 'core/Database/Connection.php';    //Database Connection
require_once 'core/Database/QueryBuilder.php';  //Holds the DB usage
require_once 'Model/query.php';

$pdo= Connection::connect($app['config']['Database']);
$mQuery = new Query($pdo);
return new QueryBuilder($pdo);
