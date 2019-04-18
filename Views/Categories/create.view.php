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
  </style>
  </head>
  <body>
    <?php view('Layouts/header');?>
    <section class="section">
        <div class="container">
        <br><br><br><br>
            <div class="box">
                <h1 class="title">Create New Category</h1>
                <hr>
                <?php view('Layouts/Validation');?>
                <form action="/admin/categories" method="post">
                    <label for="" class="label">Category's Name</label>
                    <input class="input" type="text" placeholder="Category's Name" name="category">
                    <br><br>
                    <button class="button is-link">Create</button>
                    
                    
                </form>
            </div>
        </div>
    </section>
  </body>
</html>