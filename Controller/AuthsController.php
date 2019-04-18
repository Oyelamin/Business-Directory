<?php


class AuthsController{
    // protected $database;

    public function register(){
        
        return view('Auth/register');
    }
    public function store_registered_user(){

        $query = require 'core/bootstrap.php';
        //Get the requested data
        /**========================
         * POST values
         * ====================
         */
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email= $_POST['email'];
        $password = $_POST['password'];
        $conf_password = $_POST['confirm_password'];
        /**======================= 
         * Sessions
         * ====================
         */
        $_SESSION['firstname'] = $firstname;
        $_SESSION['lastname'] = $lastname;
        /**===================================
         * -   Verifications
         * *******Any validated static method defined are with their messages*********
         * ========================
         */
        $check_user = $query->checkIfUserExists('admin',$email);  //Check if user exists before
        
        $isValidMailAddress = isValidEmail($email);   //Check if is valid Email Address provided
        if(empty($firstname)){
            Validate::errorValidation('Firstname is required!');
            return back();

        }elseif(empty($lastname)){

            Validate::errorValidation('Lastname is required!');
            return back();

        }elseif(count($check_user) == 1){
            Validate::errorValidation('User Already Exists');
            return back();
        }elseif(empty($email)){

            Validate::errorValidation('Email Address is required!');
            return back();

        }elseif(empty($password)){

            Validate::errorValidation('Password is required!');
            return back();

        }elseif(strlen($password) < 8){

            Validate::errorValidation('The password must be up to 8 characters!');
            return back();

        }elseif($password !== $conf_password){ 

            Validate::errorValidation('The two passwords doesn\'t match!');
            return back();

        }elseif($isValidMailAddress == false){
            
            Validate::errorValidation('Please enter valid mail address!');
            return back();
        
        }else{
            
        /**
         * Store data if no error
         */
        $query->insert('admin',[

                'firstname' => $firstname,
                'lastname' => $lastname,
                'email' => $email,
                'password' => $password
            
            ]); 

        Validate::successValidation("Welcome you have successfully registered!");
        
        return redirect('home');

        }
       
    }
    public function login(){
        return view('Auth/login');
    }
    public function validate_user_login(){
        session_start();
        $query = require 'core/bootstrap.php';
        $email = $_POST['email'];

        $password= $_POST['password'];
        $user_check = $query->loginAdmin('admin',$email,$password);
        if(empty($email)){

            Validate::errorValidation('Email Address is required!');
            return back();

        }elseif(empty($password)){

            Validate::errorValidation('Password is required!');
            return back();

        }elseif(count($user_check) !== 1){

            Validate::errorValidation("Your data do not match our records. Please Register");
            return back();

        }else{
            
            $admin_data = $query->selectAdminName('admin',$email);
            foreach($admin_data as $data){
                $name = $data;
            }
            if(empty($_SESSION['firstname'])){
                $_SESSION['firstname'] = $name->firstname;
                $_SESSION['lastname'] = $name->lastname;
                Validate::successValidation("Welcome you have successfully Logged in!");
                return redirect('home');
            }else{
                Validate::errorValidation("A user has logged in to this device");
                return back();
            }

        }


    }
    public function home(){
        session_start();
        $auth_firstname = $_SESSION['firstname'];
        if(empty($auth_firstname)){
            redirect('login');
        }
        return view('Auth/home');

    }
    public function logout(){
        session_start();
        session_destroy();
        return redirect('login');
    }
}