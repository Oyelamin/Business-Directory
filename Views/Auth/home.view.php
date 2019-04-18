<!DOCTYPE html>
<html>  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Home</title>
    <link href="../Public/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
   
  <style>
    a:hover{
      text-decoration: none;
    }
    body{
      background:url('../Public/assets/img/auth2.jpg');
    background-size:cover;
    background-repeat:no-repeat;
    height:800px;
    background-attachment: fixed;
    }
    header nav{
      box-shadow:4px 4px 40px black;
    }
    section{
      text-align:center;
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
    
  </style>
  <body>
  <?php view('Layouts/header') ?>
  <br><br><br><br><br><br>
    <section>
    <?php view('Layouts/Validation'); ?>
      <div class="container">
        <h3 class="h3">The Best Business Information</h3>
        <h1 class="h1">We're In The Business Of Helping You Start Your Business</h1>
      </div>
      
    </section>
  </body>
</html>