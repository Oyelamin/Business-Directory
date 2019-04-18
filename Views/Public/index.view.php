<!DOCTYPE html>
<html>  
<link href="../Public/assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="../Public/assets/js/bootstrap.min.js"></script>
<script src="../Public/assets/js/jquery-2.2.4.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<head>
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
      color:#3596e0;
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
  
  <br><br>
  <div class="container">
  <div class="row">
        <div class="col-md-4 col-md-offset-3">
            <form action="/business/search" method="get" class="search-form">
                <div class="form-group has-feedback">
            		<label for="search" class="sr-only">Search</label>
            		<input type="text" class="form-control" name="data" id="search" placeholder="search">
              		<span class="glyphicon glyphicon-search form-control-feedback"></span>
            	</div>
            </form>
        </div>
    </div>
    </div>
    <section>
    <?php view('Layouts/Validation'); ?>
      <div class="container">
        <h3 class="h3">The Best Business Information</h3>
        <h1 class="h1">We're In The Business Of Helping You Start Your Business</h1>
      </div>
      
    </section>
    <style>
    
    .search-form .form-group {
  /* float: right !important; */
  transition: all 0.35s;
  width: 82px;
  height: 82px;
  background-color: white;
  box-shadow: 4px 4px 30px silver;
  border-radius: 25px;
  border: 1px solid #ccc;
  margin:auto;
  
}
.search-form .form-group input.form-control {
  padding-right: 20px;
  border: 0 none;
  background: transparent;
  box-shadow: none;
  display:block;
}
.search-form .form-group input.form-control::-webkit-input-placeholder {
  display: none;
  font-size:15px;
  font-weight:bolder;
  color:silver;
}
.search-form .form-group input.form-control:-moz-placeholder {
  /* Firefox 18- */
  display: none;
}
.search-form .form-group input.form-control::-moz-placeholder {
  /* Firefox 19+ */
  display: none;
}
.search-form .form-group input.form-control:-ms-input-placeholder {
  display: none;
}
.search-form .form-group:hover,
.search-form .form-group.hover {
  width: 100%;
  border-radius: 4px 25px 25px 4px;
}
.search-form .form-group span.form-control-feedback {
  position: absolute;
  top: 30px;
  right: 20px;
  z-index: 2;
  display: block;
  width: 34px;
  height: 34px;
  line-height: 34px;
  text-align: center;
  color: #3596e0;
  left: initial;
  font-size: 40px;
}

    </style>
  </body>
</html>