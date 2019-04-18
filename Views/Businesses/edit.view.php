
<!DOCTYPE html>
<html>  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <style>
    
    a:hover{
      text-decoration: none;
    }
    body{
    background:url('/Public/assets/img/auth2.jpg');
    background-size:cover;
    background-repeat:no-repeat;
    height:100%;
    background-attachment: fixed;
    }
    .box{
        width:60%;
        margin:auto;
    }
    .row{
        display:flex;
    }
    .form{
        padding:3px;
    }
    
    </style>
  </head>
  <body>
  <?php view('Layouts/header'); ?>
  <br><br><br><br>
  <?php view('Layouts/Validation'); ?>
  <section class="section">
    <div class="container">
      <div class="box">
        <h1 class="h1">EDIT BUSINESS</h1>

        <hr>
        
        <?php foreach($businesses as $business): ?>
        <form action="/admin/businesses/edit" method="post" enctype="multipart/form-data">
            <input name="id" value="<?php echo $business->id; ?>" type="hidden">
            <label for="" class="label">Change Business Name</label>
            <input type="text" name="name" value="<?php echo $business->name; ?>" class="input"><br><br>
            <label for="" class="label">Change Business Info</label>
            <textarea  name="about" class="textarea" ><?php echo $business->about; ?></textarea>
            <br>
            <div class="row">
                <div class="form">
                    <label for="" class="label">Change Street NO.</label>
                    <input type="text" value="<?php echo $business->street_number; ?>" name="street_number" class="input">
                </div>
                <div class="form">
                    <label for="" class="label">Change Street Name</label>
                    <input type="text" value="<?php echo $business->street_name; ?>" name="street_name" class="input">
                </div>
                <div class="form">
                    <label for="" class="label">Change City</label>
                    <input type="text" value="<?php echo $business->city; ?>" name="city" class="input">
                </div>
                <div class="form">
                    <label for="" class="label">Change Country</label>
                    <input value = "<?php echo $business->country; ?>" type="text" name="country" class="input">
                </div>
            </div><br>
            <label for="" class="label">Change Phone</label>
            <input type="text" value="<?php echo $business->phone; ?>" name="phone" class="input"><br><br>
            <label for="" class="label">Change Email</label>
            <input type="text" value="<?php echo $business->email; ?>" name="email" class="input"><br><br>
            <label for="">Change Display Image</label>
            <input type="file" name="a_file" class="input">
            <br><br>
            <button class="button">Save Changes</button>
        </form>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  </body>
</html>