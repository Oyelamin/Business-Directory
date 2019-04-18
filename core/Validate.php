<?php

class Validate{

    public static function errorValidation($message){
        $expire = time() + 1;
        return setcookie('error',$message,$expire,'','','',TRUE);
    
    }
    public static function isValidEmail($email_address){
        return (boolean)filter_var($email_address, FILTER_VALIDATE_EMAIL) && preg_match('/@.+\./', $email_address);
    
    }
    public static function successValidation($message){
        $expire = time() + 1;
        return setcookie('success',$message,$expire,'','','',TRUE);
    
    }

}