<html>
   <head>
        <title>Mobile Users</title>
      <link rel="icon" href="<? echo base_url()."images/login-logo.png";?>" sizes="32x32">
      <link rel="stylesheet" href="<? echo base_url()."css/icon.css"; ?>">
      <link rel="stylesheet" href="<? echo base_url()."css/materialize.min.css"; ?>">
      <script type="text/javascript" src="<? echo base_url()."js/jquery-1.11.2.min.js"; ?>"></script>   
      <script src="<? echo base_url()."js/materialize.min.js"; ?>"></script> 
      <link rel="icon" href="<? echo base_url()."images/login-logo.png"; ?>" sizes="32x32">
      <script src="<? echo base_url()."materialize.min2.js"; ?>"></script> 
 
   </head>
   <!--nav starts-->
   <?php include 'nav.php'; ?>
   <!--nav ends-->
   <div class="container"> <br>
         <!-- START CONTENT -->
            <div class="container indigo darken-2  ">
                <div class="section"></div> <div class="section"></div>
                 
                  <div class="row ">
                    <div class="col s12 ">
                      <ul class="tabs indigo darken-2  ">
                          
                            <li class="tab col s6 ">
                            <form method="post" action="<?php echo base_url()."index.php/customer/linktoprepaid"; ?>">
                            <button  class=" btn white indigo-text text-darken-2 waves-effect waves-light " type="submit" name="action">PREPAID</li></button>
                            </form>

                            <li class="tab col s6">
                            <form method="post" action="<?php echo base_url()."index.php/customer/linktopostpaid"; ?>">  
                            <button  href="<?php echo base_url()."index.php/customer/linktobilling"; ?>" class=" btn white indigo-text text-darken-2  waves-effect waves-light " type="submit" name="action"> POSTPAID
                            </li ></button></form>
                      </ul>
                    </div>
                  </div>
                    <div class="section"></div>
                    <div class="section"></div>
          </div><br><br>
  </div><!-- END CONTENT -->
</body>
<?php include 'footer.php'; ?>
</html>