<?php  session_start(); ?>
<!DOCTYPE html>
<html>  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN (ADMIN)</title>
    <link rel="stylesheet" href="../public/assets/css/auth.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>
  <nav style="position:fixed;width:100%;"  class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item logo" href="https://bulma.io">
        <span>Business</span> Service
        </a>
        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        </a>
    </div>
  
    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
            <a href="register" class="button is-primary">
              <strong>Sign up</strong>
            </a>
            <a class="button is-light">
              Log in
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <section class="form-section">
    <div class="container">
    <br><br><br><br><br><br><br>
    <div class="reg">
        <div class="box">
        
            <h4> <span style="color:black;font-weight:bolder;color:green;"> Admin</span> Login Form</h4>
            <?php view('Layouts/Validation'); ?>
            <br><br>
            <!-- Registration Form -->
            <form action="login" method="post">
            <label for="" class="label">Email</label>
            <input type="text" name="email" class="input"><br><br>
            <label for="" class="label">Password</label>
            <input type="text" name="password" class="input"><br><br>
            <button onclick="this.form.submit();this.disabled = true;" class="button is-success is-outlined"> Submit </button>
            <hr>
            <p>Don't have account yet <a href="register">Sign-up</a> </p>
            </form>
        </div>
    </div>
    </div>
  </section>
  </body>
</html>