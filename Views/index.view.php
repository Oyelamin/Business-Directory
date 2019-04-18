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
    <header>
      <nav style="width:100%;position:fixed;" class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a style="font-size:30px;font-weight:bolder;" class="navbar-item logo" href="https://bulma.io">
            <span>Business</span> Service
          </a>
          <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
          <div class="navbar-start">
            <a class="navbar-item">
              Home
            </a>

            <a class="navbar-item">
              Useful Terms
            </a>

            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link">
                More
              </a>

              <div class="navbar-dropdown">
                <a class="navbar-item">
                  About
                </a>
                <a class="navbar-item">
                  Jobs
                </a>
                <a class="navbar-item">
                  Contact
                </a>
                <hr class="navbar-divider">
                <a class="navbar-item">
                  Report an issue
                </a>
              </div>
            </div>
          </div>

          <div class="navbar-end">
          <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link">
              <i class="fa fa-user-circle"></i> <?php echo " ".$_SESSION['firstname']; ?>
              </a>

              <div class="navbar-dropdown">
                <a class="navbar-item">
                <a class="dropdown-item" href="logout">
                    Logout
                </a>
                </a>
                
                <hr class="navbar-divider">
                <a class="navbar-item">
                  Report an issue
                </a>
              </div>
            </div>
          </div>
        </div>
      </nav><br><br><br><br><br><br>
    </header>
    <section>
      <div class="container">
        <h3 class="h3">The Best Business Information</h3>
        <h1 class="h1">We're In The Business Of Helping You Start Your Business</h1>
      </div>
      
    </section>
  </body>
</html>