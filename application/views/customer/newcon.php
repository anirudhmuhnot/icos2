<html lang="en">
<head>
  <title>New Connection</title>
  <link rel="icon" href="<? echo base_url()."images/login-logo.png"; ?>" sizes="32x32">
    <link rel="stylesheet" href="<? echo base_url()."css/materialize.min.css"; ?>">
    <link rel="stylesheet" href="<? echo base_url()."css/icon.css"; ?>">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<? echo base_url()."css/style.css"; ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  

</head>
<?php include 'nav.php';?> 
<div class="section"></div>
    
<body class="indigo darken-4">
<div class="container"><br>
  <div class="row">
      <div class="input-field col s12 center">
        <img src="<?php echo base_url()."images/login-logo.png"; ?>" alt="" class="circle responsive-img valign profile-image-login" style="height:100px; width:100px;">
        <h5 class="indigo-text white-text center-align">VIBGYOR</h5>
        <p class="center login-form-text white-text" >NEW CONNECTION</p>
      </div>
  </div><br>
  <div class="row"> 
        <div class="container">
        <div class="col s12 z-depth-4 card-panel center-align" style="width:100%"> 
            <div class="container white">
            <form  method="post" action="<? echo base_url()."index.php/customer/new_connection";?>">
              <p><label >MOBILE</label></p>
              <p>
              <input name="service" type="radio" id="test1" value="mobilepre" checked />
              <label for="test1">PREPAID</label>
              </p>
              <p>
              <input name="service" type="radio" id="test2" value="mobilepost" />
              <label for="test2">POSTPAID</label>
              </p>
              <p><label >DTH</label></p>
              <p>
              <input name="service" type="radio" id="test3" value="dth" />
              <label for="test3">DTH</label>
              </p>
              <button class="btn waves-effect waves-light" type="submit" name="action">Request
              <i class="material-icons right">send</i>
              </button>
              </form>
              </div>
        </div>
        </div>
            
            <div class="section" style="height:40%;"></div>
  </div>
  </center>
      
</div>
    <? include 'footer.php';?>
 </body>
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