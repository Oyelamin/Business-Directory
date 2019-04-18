<?php


class Connection{
    
    public static function connect($config){    //Config secures the db password and prevents sql injection

        try{

            return new PDO(

                $config['connection'].

                ';dbname='.$config['name'],

                $config['username'],

                $config['password'],

                $config['options']

            );
        }catch(PDOException $e){

            die($e->getMessage());  //Get the error message

        }
    }
}