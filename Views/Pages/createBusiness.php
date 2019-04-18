
<!DOCTYPE html>
<html>  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Home</title>
    <link href="../Public/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    
	<!--     Fonts and icons     -->
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">

<!-- CSS Files -->
  <link href="../Public/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../Public/assets/css/gsdk-bootstrap-wizard.css" rel="stylesheet" />
  <link rel="stylesheet" href="../Public/assets/css/animate.css">
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../Public/assets/css/demo.css" rel="stylesheet" />
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
    <?php require 'Views/Layouts/header.php'; ?>
    <section>
    <!-- Big Container -->
      <div class="container animated fadeInRight"> 
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <!--      Wizard container        -->
            <div class="wizard-container">
                <div class="card wizard-card" data-color="green" id="wizardProfile">
                <form action="createBusiness" method="post">
                <!--        You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->
            <div class="wizard-header">
                <h3>
                    <b>BUILD</b> Your New BUSINESS <br>
                    <small>This information will let us know about the new business.</small>
                </h3>
            </div>

						<div class="wizard-navigation">
							<ul>
                <li><a href="#about" data-toggle="tab">Account</a></li>
                <li><a href="#account" data-toggle="tab">About</a></li>
                <li><a href="#address" data-toggle="tab">Address</a></li>
              </ul>

						</div>
            
            <div class="tab-content">
                <div class="tab-pane" id="about">
                  <div class="row">
                      <h4 class="info-text" style="padding:10px;"> Let's start with the basic information (with validation)</h4>
                      <div class="col-sm-4 col-sm-offset-1">
                          <div class="picture-container">
                              <div class="picture">
                                  <img src="../Public/assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                  <input type="file" name="a_file" id="wizard-picture">
                              </div>
                              <h6>Upload Display Picture</h6>
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="form-group">
                            <label>Company Name <small>(required)</small></label>
                            <input name="name" type="text" class="form-control" placeholder="INITS LIMITED...">
                          </div>
                          <div class="form-group">
                            <label> Phone <small>(required)</small></label>
                            <input name="phone" type="text" class="form-control" placeholder="(+234) 7082633522">
                          </div>
                      </div>
                      <div class="col-sm-10 col-sm-offset-1">
                          <div class="form-group">
                              <label>Contact Email Address <small>(required)</small></label>
                              <input name="email" type="email" class="form-control" placeholder="Company@initsng.com">
                          </div>
                      </div>
                  </div>
                </div>
                <div class="tab-pane" id="account">
                    <h4 class="info-text"> What are you doing? (Message) </h4>
                    <div class="row">
                        <div class="col-lg-10 col-sm-offset-1">
                          <div class="form-group">
                            <label>Tell us what it's all about</label>
                            <textarea style="font-size:15px;" class="textarea" name="about"></textarea>
                          </div>
                          <div class="form-group">
                          <label for="">Select Categories</label>
                            <div class="select">
                              <select name="category" id="">
                                <?php foreach($categories as $cat): ?>
                                  <option value="<?php echo $cat->name; ?>"><?php echo $cat->name ?></option>
                                <?php endforeach; ?>
                              </select>
                              
                            </div>

                          </div>
                        </div>
                      </div>  
                    </div>
                      <div class="tab-pane" id="address">
                          <div class="row">
                              <div class="col-sm-12">
                                  <h4 class="info-text"> Where is your Location? </h4>
                              </div>
                              <div class="col-sm-7 col-sm-offset-1">
                                    <div class="form-group">
                                      <label>Street Name</label>
                                      <input type="text" class="form-control" name="street_name" placeholder="5h Avenue">
                                    </div>
                              </div>
                              <div class="col-sm-3">
                                    <div class="form-group">
                                      <label>Street Number</label>
                                      <input type="text" class="form-control" name="street_number" placeholder="242">
                                    </div>
                              </div>
                              <div class="col-sm-5 col-sm-offset-1">
                                    <div class="form-group">
                                      <label>City</label>
                                      <input type="text" class="form-control" name="city" placeholder="New York...">
                                    </div>
                              </div>
                              <div class="col-sm-5">
                                    <div class="form-group">
                                      <label>Country</label><br>
                                        <select name="country" class="form-control">
                                          <?php foreach($countries as $country): ?>
                                          <option value="<?php echo $country->name; ?>"><?php echo $country->name; ?></option>
                                          <?php endforeach; ?>
                                          <option value="...">...</option>
                                      </select>
                                    </div>
                              </div>
                              </div>
                            </div>
                        </div>
                        <div class="wizard-footer height-wizard">
                            <div class="pull-right">
                                <input type='button' style="background:green;border:3px solid green;" class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Next' />
                                <button class='btn btn-finish btn-fill btn-warning btn-wd btn-sm'>Finish</button>
                            </div>

                            <div class="pull-left">
                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </form>
                </div>
            </div> <!-- wizard container -->
        </div>
        </div><!-- end row -->
      </div> <!-- End Big container -->
    </section>
  </body>
  <!--   Core JS Files   -->
	<script src="../Public/assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="../Public/assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../Public/assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="../Public/assets/js/gsdk-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="../Public/assets/js/jquery.validate.min.js"></script>

</html>