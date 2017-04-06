<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 3.1
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
  <title>Forgot Password </title>
  <link rel="icon" href="<?php echo base_url()."images/login-logo.png"; ?>" sizes="32x32">
  <link href="<?php echo base_url()."css/materialize.min.css"; ?>" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url()."css/style.min.css"; ?>" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url()."css/page-center.css"; ?>" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url()."css/icon.css"; ?>" type="text/css" rel="stylesheet" media="screen,projection">
  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="<?php echo base_url()."css/prism.css"; ?>" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url()."css/perfect-scrollbar.css"; ?>" type="text/css" rel="stylesheet" media="screen,projection">
</head>
<div class="section"></div>
    

<body class="teal">
<div class="row">
          <div class="input-field col s12 center">
            <img src="<?php echo base_url()."images/login-logo.png"; ?>" alt="" class="circle responsive-img valign profile-image-login">
			  <h5 class="indigo-text white-text center-align">VIBGYOR</h5>
            <p class="center login-form-text">Retrieve Password</p>
          </div>
  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form" method="post" action="<?php echo base_url()."index.php/users/forgot_pass";?>">
        
        <div class="row margin"><br>
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix "></i>
            <input id="email" type="email" name="email" required>
            <label for="email" >Enter your Email</label>
          </div>
        </div>
      
        <div class="row"><center>
        <button class="btn waves-effect waves-light" type="submit" name="action">Reset
        <i class="material-icons right">send</i>
        </button></center>
        </div>
        <div class="row">
          <div class="input-field  center-align">
              <p class="margin right-align medium-small "><a href="<?php echo base_url()."index.php/users";?>"> <p class="center login-form-text">Back to Login</p></a></p>
          </div>          
        </div>
</div>
      </form>
    </div>
  </div>
  <!-- ================================================
  Scripts
  ================================================ -->
  <!-- jQuery Library -->
  <script type="text/javascript" src="<?php echo base_url()."js/jquery-1.11.2.min.js";?>" ></script>
  <!--materialize js-->
  <script type="text/javascript" src="<?php echo base_url()."js/materialize.min.js"; ?>"></script>
  <!--prism-->
  <script type="text/javascript" src="<?php echo base_url()."js//prism.js"; ?>"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="<?php echo base_url()."js/perfect-scrollbar.min.js"; ?>"></script>
  <!--plugins.js - Some Specific JS codes for Plugin Settings-->
  <script type="text/javascript" src="<?php echo base_url()."js/plugins.min.js"; ?>"></script>
  <!--custom-script.js - Add your own theme custom JS-->
  <script type="text/javascript" src="<?php echo base_url()."js/custom-script.js"; ?>"></script>
</body>

</html>