<?php

class Request{
    public static function url(){
        // return trim(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH),'/');
        return trim($_SERVER['PATH_INFO'],'/');
    }

    public function method(){
        return $_SERVER['REQUEST_METHOD'];
    }
    
}