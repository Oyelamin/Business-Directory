<?php   
class queryTesterController{
    public function index(){
    require 'core/bootstrap.php';
        $mQuery->findAll('businesses',[
            'id' => 1,
            'name' => 'INITS LIMITED'
        ],
        [
            'LIMIT' => 1
            
            
        ]);
    }
}