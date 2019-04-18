<?php
session_start();
class CategoriesController{
    /**
     * The view index page
     */
    
    public function index(){
        $query = require 'core/bootstrap.php';
        $categories = $query->selectAll('categories');
        return view('Categories/index',compact('categories'));

    }
    /**
     * Create new category
     */
    public function create(){

        return view('Categories/create');
    }
    
    /**
     * Store the filled form
     */
    public function store(){
        $query = require 'core/bootstrap.php';
       
        $category = $_POST['category'];
        if(empty($category)){
            Validate::errorValidation('Category\'s name is required!');
            return back();
        }elseif(strlen($category) < 3){
            Validate::errorValidation('Category\'s name must have up to 3 characters');
            return back();
        }else{

            $query->insert('categories',[
                'name' => $category
            ]);
            
            Validate::successValidation('Category stored successfully!!!');
            return redirect('categories');
        }
    }
    /**
     * Destroy category
     */
    public function destroy(){
        $number= $_REQUEST;
        $id = $number['no'];
        $query = require 'core/bootstrap.php';
        $query->destroy('categories',$id);
        Validate::successValidation('Category Deleted successfully!!!');
        return back();
    }
    public function addToBusiness(){
        $number= $_REQUEST;
        $id = $number['no'];
        $query = require 'core/bootstrap.php';
        $categories = $query->selectAll('categories');
        return view('categories/addNew',compact('id','categories'));
    }
    public function storeBusinessCategory(){
        $query = require 'core/bootstrap.php';
        $number= $_REQUEST;
        $id = $number['no'];
        $category = $_POST['category'];
        if(empty($category)){
            Validate::errorValidation('Category\'s name is required!');
            return back();
        }elseif(strlen($category) < 3){
            Validate::errorValidation('Category\'s name must have up to 3 characters');
            return back();
        }else{

            $query->insert('business_categories',[
                'category' => $category,
                'business_id' => $id
            ]);
            
            Validate::successValidation('Category stored successfully!!!');
            return redirect('/admin/businesses');
        }
    }
}