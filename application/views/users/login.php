<?
$res = $this->customer_model->check_if_logged_in();
if ($res==TRUE){
  $this->load->view('customer');
}
?>
<html>
<head>
  <title>Vibgyor Pvt. Ltd.</title>
  <link rel="icon" href="<?php echo base_url()."images/login-logo.png"; ?>" sizes="32x32">
  <link href="<?php echo base_url()."css/materialize.min.css"; ?>" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url()."css/style.min.css"; ?>" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url()."css/page-center.css"; ?>" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url()."css/icon.css"; ?>" type="text/css" rel="stylesheet" media="screen,projection">
  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="<?php echo base_url()."css/prism.css"; ?>" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url()."css/perfect-scrollbar.css"; ?>" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url()."css/icon.css";?>" rel="stylesheet">
  <link href="<?php echo base_url()."css/materialize.min.css";?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url()."css/style.css";?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous">
  </script>
  <script type="text/javascript" src="<?php echo base_url()."js/materialize2.js";?>"></script>
  <script  type="text/javascript" src="<?php echo base_url()."js/init.js";?>"></script>
</head>
<body class="teal"> 
<div class="row" >
    <div class="input-field col s12 center">
      <img src="<?php echo base_url()."images/login-logo.png"; ?>" alt="" class="circle responsive-img valign profile-image-login">
			<h5 class="indigo-text white-text center-align">VIBGYOR</h5>
      <p class="center login-form-text">Login</p><?php echo $this->session->flashdata('login_failed');
      echo $this->session->flashdata('logged_in'); echo $this->session->flashdata('created_successfully'); echo $this->session->flashdata('account_exists'); echo $this->session->flashdata('reset_pass'); ?>
    </div>
    <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form" method="post" action="<?php echo base_url().'index.php/users/login_user'; ?>">
      <div class="row margin"><br>
        <div class="input-field col s12">
          <i class="material-icons prefix">perm_identity</i>
          <input name="email" type="email" multiple required>
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix">lock</i>
          <input name="password" type="password">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">          
        <div class="input-field col s12 m12 l12  login-text">
          <input type="checkbox" id="remember-me" />
          <label for="remember-me">Remember me</label>
        </div>
      </div>
      <div class="row"><center>
        <button class="btn waves-effect waves-light" type="submit" name="action">Login
        <i class="material-icons right">send</i>
        </button></center>
      </div>
      <div class="row">
        <div class="input-field col s6 m6 l6">
          <p class="margin medium-small"><a href="<?php echo base_url()."index.php/users/register_now"; ?> ">Register Now!</a></p>
        </div>
        <div class="input-field col s6 m6 l6">
          <p class="margin right-align medium-small"><a href="<?php echo base_url()."index.php/users/linktopass"; ?> ">Forgot password ?</a></p>
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