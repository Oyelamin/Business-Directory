<?php
/**
 * This will return the database details and requirements
 */
return [
    'Database' => [

        'name' => 'business', //database name

        'username' => 'root',   //DB username

        'password' => '',   //DB Password

        'connection' => 'mysql:host=127.0.0.1', //DB Host connection

        'options' => [  //Catch the exception errors

            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION //Exception or Warning

        ]
        
    ]
];
