<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 3.1
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
  <title>Registeration </title>
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
<body class="teal ">
<div class="row">
          <div class="input-field col s12 center">
            <img src="<?php echo base_url()."images/login-logo.png";?>" alt="" class="circle responsive-img valign profile-image-login">
			  <h5 class="indigo-text white-text center-align">VIBGYOR</h5>
            <p class="center login-form-text">Login</p>
          </div>
  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form" action="<?php echo base_url().'index.php/users/register_user'; ?>" method="post">
        
        <div class="row margin"><br>
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix "></i>
            <input name="email" type="email">
            <label for="email">Email</label>
          </div>
        </div>
		<div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input name="name" type="text" required>
            <label for="name" >Full Name</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input name="password" id="password1" type="password" required>
            <label for="password">Password</label>
          </div>
        </div>
		<div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password2" type="password" onkeyup="checkPasswordMatch();" required>
            <label for="password">Repeat Password</label>
          </div>
        </div>
        <div class="row"><center>
        <div id="pass2"></div>
        <button class="btn waves-effect waves-light" type="submit" id="submitbtn" onsubmit="checkPasswordMatch();">Register
        <i class="material-icons right">send</i>
        </button></center>
      </div>
        <div class="row">
          <div class="input-field  center-align">
              <p class="margin right-align medium-small "><a href="<?php echo base_url()."index.php/users/"; ?>"<p class="center login-form-text">Back to Login</p></a></p>
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
  <script>
  document.getElementById("submitbtn").disabled = true;
  function checkPasswordMatch() {
    var password = $("#password1").val();
    var confirmPassword = $("#password2").val();
    if(password==""||confirmPassword==""){
      document.getElementById("submitbtn").disabled = true;
      $("#pass2").html("");
    }

    else if (password != confirmPassword){
        $("#pass2").html("Passwords do not match!");
        document.getElementById("submitbtn").disabled = true;
      }
    
    else{
        $("#pass2").html("");
        document.getElementById("submitbtn").disabled = false;
    }
  }
    $(document).ready(function () {
      $("#password2,#password1").keyup(checkPasswordMatch);
    });
  </script>

</body>

</html>