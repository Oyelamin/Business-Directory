<!DOCTYPE html>
<html>  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Businesses</title>
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
    header nav{
      box-shadow:4px 4px 40px black;
    }
    section{
      /* text-align:center; */
      padding:50px;
    }
    section .h1{
      max-width:85%;
      font-size:50px;
      padding:10px;
      font-weight:bolder;
    }
    section .h3{
      color:white;
      max-width:85%;
      font-size:30px;
      padding:10px;
      font-weight:bolder;
    }
    .row{
        display:grid;
        grid-template-columns:repeat(auto-fill,minmax(300px,1fr));
        grid-gap:10px;
    }
    .h2{
        font-size:30px;
    }
    small{
        text-align:left;
        color:black;
    }
    .box-header{
        display:grid;
        grid-template-columns:auto auto;
    }
    figure img{
        border-radius:40px;
        /* box-shadow:4px 2px 10px black; */
    }

    .extra{
        cursor:pointer;

    }
    .ext small{
        color:silver;
    }
    .scrolling-wrapper {
      display: flex;
      flex-wrap: nowrap;
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
      scroll-behavior: smooth;
      transition: .8s;
  
}
.scrolling-wrapper::-webkit-scrollbar{
  display:none;
  transition: .8s;
 
}
.cards {
    
    transition: .8s;
    
    margin:10px;
  }
.card{

 
  
  box-shadow:0 2px 3px rgba(10,10,10,.1),0 0 0 1px rgba(10,10,10,.1);
  color:#4a4a4a;
  transition: .8s;
  /* padding:0px; */
  /* margin:10px; */

  width:100%;
 

    /* position: relative; */
}

  </style>
  </head>

  <body>
    <?php view('Layouts/header'); ?>
    <br><br><br><br>
   
    <section>
    <?php view('Layouts/Validation'); ?>
      <?php if(count($businesses) >= 1): ?>
        <div class="scrolling-wrapper">
        <?php foreach($businesses as $business): ?>
          <div style="cursor:move;" class="cards">
            <div class="card" style="width:380px;">
              <header class="card-header">
                <img style="cursor:zoom-in;height:300px;width:400px;border:2px dotted green;"  src="../Public/uploads/img/<?php echo $business->display_image; ?>">
              </header>
              <div class="card-content">
                <div class="content">
                <h1 class="h2"><?php echo $business->name ?></h1> <hr>
                <small><?php echo $business->about ?></small>
                  <hr>
                  <b><p>Categories: </p></b>
                  <?php  
                    $query = require 'core/bootstrap.php';
                    $id = $business->id;
                    $categories = $query->selectJoin($business->id);
                    foreach($categories as $category):
                  ?>
                  <small style="border-right:1px solid silver;padding:4px;" class="small"><?php echo $category->category;?></small>
                    <?php endforeach; ?>
                  <br>
                  <b><p>Location: </p></b>
                  <small>
                    <?php echo 'No '.$business->street_number.', '.$business->street_name.', '.$business->city.', '.$business->country ?>.
                  </small>
                  <b><p>Phone:</p></b>
                  <small><?php echo $business->phone ?></small>
                  <b><p>Email Address: </p></b>
                  <small><?php echo $business->email ?></small>

                </div>
              </div>
              <footer class="card-footer">
                <a href="/admin/businesses/edit?no=<?php echo $business->id; ?>" class="card-footer-item">Edit</a>
                <a href="/admin/businesses/add_category?no=<?php echo $business->id; ?>" class="card-footer-item">Add Category</a>
                <a href="/admin/businesses/delete?no=<?php echo $business->id; ?>" class="card-footer-item">Delete</a>
              </footer>
            </div>
          </div>
        <?php endforeach; ?>
        </div>
      <?php  else: ?>
      <h1 class="h1">No Business Registered Yet!. </h1>
      <?php endif ?>
    </section>
  </body>
</html>