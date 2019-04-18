<?php

class Router{

    protected $routes= [
        'GET' => [],
        'POST' => []
    ];
    public static function load($file){
        $router = new static;

        require $file;

        return $router;

    }
    public function define($routes){

        return $this->routes = $routes;
        
    }
    public function get($uri,$controller){
        // $file_path = 'Controller/'.strtolower($controller) ;
        
        $this->routes['GET'][$uri] = $controller;


    }
    public function post($uri,$controller){
        $this->routes['POST'][$uri] = $controller;
    }
    public function direct($uri,$requestType){

        if(array_key_exists($uri,$this->routes[$requestType])){

            return $this->routes[$requestType][$uri];
            
        }
        throw new Exception("No routes defined for this uri");
    }


}