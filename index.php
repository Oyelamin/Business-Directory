<?php


require 'core/Classmap.php';    //Class Mapper
require 'core/bootstrap.php';  //required files 
$router = Router::load('routes.php');   //pull the route file and display the requested value(Controller)
$url = trim($_SERVER['PATH_INFO'],'/'); //url path
$method = $_SERVER['REQUEST_METHOD'];   //method
$file = $router->direct($url,$method);  //File class name
Classmap::loadClass($file);