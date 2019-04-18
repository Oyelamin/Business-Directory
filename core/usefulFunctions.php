<?php

function view($direction,$data= []){
    extract($data);
    return require 'Views/'.$direction.'.view.php';
}
function back(){

    return header('Location: ' . $_SERVER['HTTP_REFERER']);
}
function isValidEmail($email_address){

    return (boolean)filter_var($email_address, FILTER_VALIDATE_EMAIL) && preg_match('/@.+\./', $email_address);

}
function errorValidation($message){

    $expire = time() + 1;
    return setcookie('error',$message,$expire,'','','',TRUE);

}
function successValidation($message){

    $expire = time() + 1;
    return setcookie('success',$message,$expire,'','','',TRUE);

}
function redirect($location){
    return header("Location: $location");
}