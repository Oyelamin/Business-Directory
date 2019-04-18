<?php


class Classmap{

    public static function loadClass($class){

        $explode = explode('@',$class);
        $class = $explode[0];
        $method = $explode[1];
        $file_path ='Controller/'.strtolower($class).'.php';
        if(file_exists($file_path)){
            require $file_path;
            $class::$method();
            
        }else{
            throw new Exception("No file associated with the class provided");
        }

    }

}