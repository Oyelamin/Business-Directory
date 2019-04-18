<?php

class PublicController{
    public function index(){
        return view('Public/index');
    }
    public function search(){
        $search = $_REQUEST['data'];
        $query = require 'core/bootstrap.php';
        $date = $query->selectLike('businesses',[
            'email' => $search,
            'phone' => $search,
            'about' => $search,
            'street_name' => $search,
            'country' => $search
        ]);
        var_dump($date);
    }
}