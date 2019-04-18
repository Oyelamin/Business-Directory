<!DOCTYPE html>
<html>  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Categories</title>
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
    height:800px;
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
    section .container{
        width:50%;
    }
    ol{
        display:grid;
        grid-template-columns:auto 70px;
    }
    ol li{
        padding:10px;
        border-bottom:3px solid silver;
    }
    ol a.button{
      padding:10px;
      margin-top:10px;
      margin-left:-70px;
      margin-right:70px;
    }
    
  </style>
  </head>
  <body>
  <?php view('Layouts/header'); ?>
<br><br><br><br>
  <section class="section">
    <div class="container">
        <div class="box">
            <h1 class="title">
            Categories
            </h1>
            <hr>
            <?php view('Layouts/Validation'); ?>
            <ol style="padding:20px;">
            <?php foreach($categories as $category): ?>
                <li><?php echo $category->name; ?> </li> 
                <a href="/admin/categories/delete?no=<?php echo $category->id; ?>" class="button is-small is-rounded is-danger">DELETE</a>
                <?php endforeach; ?>
            </ol>
        </div>
      
      
    </div>
  </section>
  </body>
</html>