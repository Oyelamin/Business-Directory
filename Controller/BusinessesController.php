<?php
session_start();
class BusinessesController{

    public function index(){
        $query = require 'core/bootstrap.php';
        $businesses = $query->selectAll('businesses');
        return view('Businesses/index',compact('businesses'));
    }
    /**
     * Create New Business
     */
    public function create(){
        $query = require 'core/bootstrap.php';
        $auth_firstname = $_SESSION['firstname'];
        if(empty($auth_firstname)){
            return redirect('login');
        }else{
            $categories = $query->selectAll('categories');
            $countries = $query->selectAll('countries');
            
            return view('Businesses/create',compact('categories','countries'));
        }
        
    }
    /**
     * Store informations
     */
    public function store(){
        $query = require 'core/bootstrap.php';
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $about = $_POST['about'];
        $category = $_POST['category'];
        $street_name = $_POST['street_name'];
        $street_number = $_POST['street_number'];
        $city = $_POST['city'];
        $country = $_POST['country']; 
        $file = $_FILES['a_file'];
        $file_path = $_FILES['a_file']['name'];
        $file_type = $_FILES['a_file']['type'];
        $img_move_to = 'Public/uploads/img/'.$file_path;

        $query->insert('businesses',[
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'about' => $about,
            'street_name' => $street_name,
            'street_number' => $street_number,
            'city' => $city,
            'country' => $country,
            'display_image' => $file_path

        ]);

        $business_id = $query->show('businesses','email',$email);
        foreach($business_id as $id){
            $buss_id = $id;
        }
        if(preg_match("!image!",$file_type)){
            //Copy the image to Public/uploads/img folder
            if(copy($file['tmp_name'], $img_move_to)){
                $query->insert('business_images',[
                    'business_id' => $buss_id->id,
                    'image' => $file_path
                ]);
            }
        }
        $query->insert('business_categories',[
            'category' => $category,
            'business_id' => $buss_id->id
        ]);
        Validate::successValidation('New Business Created successfully!');
        
        return back();
    }
    /**
     * Show a particular information
     */
    public function edit(){
        $number= $_REQUEST;
        $id = $number['no'];
        $query = require 'core/bootstrap.php';
        $businesses = $query->find('businesses',$id);
        if(count($businesses) !== 1){
            Validate::errorValidation('Sorry..! No business created yet for this ID provided');
            return redirect('/admin/businesses');
        }else{
        return view('Businesses/edit',compact('businesses'));
        }

        
    }
    public function update(){
        //Request Values
        $name = $_POST['name'];
        $email = $_POST['email'];
        $country = $_POST['country'];
        $phone = $_POST['phone'];
        $street_number = $_POST['street_number'];
        $street_name = $_POST['street_name'];
        $city = $_POST['city'];
        $about = $_POST['about'];
        $id = $_POST['id'];
        $query = require 'core/bootstrap.php';
        $file = $_FILES['a_file'];
        $file_path = $_FILES['a_file']['name'];
        $file_type = $_FILES['a_file']['type'];
        $img_move_to = 'Public/uploads/img/'.$file_path;

        if(!empty($file_path)){
            if(preg_match("!image!",$file_type)){
                //Copy the image to Public/uploads/img folder
                if(copy($file['tmp_name'], $img_move_to)){
                    $query->update('businesses',[
                        'name'=> $name,
                        'email' => $email,
                        'country' => $country,
                        'phone' => $phone,
                        'street_name' => $street_name,
                        'street_number' => $street_number,
                        'city' => $city,
                        'about' => $about,
                        'display_image' => $file_path
                    ],$id);
                    Validate::successValidation('Business Info Changed Successfully');
                    return redirect('/admin/businesses');
                }

            }
            
            
        }else{

            $query->update('businesses',[
                'name'=> $name,
                'email' => $email,
                'country' => $country,
                'phone' => $phone,
                'street_name' => $street_name,
                'street_number' => $street_number,
                'city' => $city,
                'about' => $about
                
            ],$id);
            Validate::successValidation('Business Info Changed Successfully');
            return redirect('/admin/businesses');
        }

    }
    /**
     * Destroy a particular information
     */
    public function destroy(){
        $number= $_REQUEST;
        $id = $number['no'];
        $query = require 'core/bootstrap.php';
        $query->destroy('businesses',$id);
        Validate::successValidation('Business Deleted Successfully');
        return back();
    }

}