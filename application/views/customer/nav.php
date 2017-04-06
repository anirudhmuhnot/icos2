<!--nav starts-->
  
<!--nav starts-->

   <nav>
      <div class=" z-depth-4 nav-wrapper indigo darken-4">
          <img src="<?php echo base_url()."images/login-logo.png";?>" alt="" class="circle responsive-img valign profile-image-login" height="50px", width="30px" style="margin-top:15px ; margin-left:40px">
          <a href="<?echo base_url()."index.php/customer/index";?>" class="brand-logo"><span style="margin-top:15px ; margin-left:10px">VIBGYOR</span></a>
                     
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="side-nav" id="mobile-demo">
              <ul class="collapsible collapsible-accordion">
                <li>
                <a class="collapsible-header">Notifications<span class="new badge"><? echo sizeof($this->session->tempdata());?></span><i class="material-icons">arrow_drop_down</i></a>
                <div class="collapsible-body">
                    <ul>
                      <?php $i = 1; foreach($this->session->tempdata() as $obj){echo")<li style='color:teal; border-bottom:1px solid black;'>".$i++.") ".$obj."</li>";} ?>
                   </ul>
                </div>
                </li>
              </ul>
              <li><a href="<?echo base_url()."index.php/customer/index";?>">Home</a></li>
              <li><a href="<?echo base_url()."index.php/customer/linktobilling";?>">Billing</a></li>
              <li><a href="<?echo base_url()."index.php/users/logout";?>">Logout</a></li>
            </ul>
            <ul class="right hide-on-med-and-down">
            <li class="right"><a class="red-text dropdown-button right" style="width:220px; margin-right:10px;" href="#!" data-activates="dropdown1">Notifications<span class="new badge"><? echo sizeof($this->session->tempdata());?></span></a></li>
            <li><a href="<?echo base_url()."index.php/customer/index";?>"><i class=" material-icons left">home</i>Home</a></li>
            <li><a href="<?echo base_url()."index.php/customer/linktobilling";?>">Billing</a></li>
            <li><a href="<?echo base_url()."index.php/users/logout";?>">Logout</a></li>
           </ul>

           <ul id="dropdown1" class="dropdown-content orange">
            <?php foreach($this->session->tempdata() as $obj){echo "<li style='padding:4px;'>".$obj."</li><li class='divider'></li>";} ?>
          </ul>
        </div>
    </nav>


