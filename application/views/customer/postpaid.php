<html>

<head>
    <title>Postpaid Plans</title>
    <link rel="icon" href="<? echo base_url()."images/login-logo.png";?>" sizes="32x32">
    <link rel="stylesheet" href="<? echo base_url()."css/icon.css";?>">
    <link rel="stylesheet" href="<? echo base_url()."css/materialize.min.css";?>">
    <script type="text/javascript" src="<? echo base_url()."js/jquery-2.1.1.js";?>"></script>
    <script src="<? echo base_url()."js/materialize.min.js";?>"></script>
    <link rel="icon" href="<? echo base_url()."images/login-logo.png";?>" sizes="32x32">
    <script src="<? echo base_url()."materialize2.js";?>"></script>
</head>
<!--nav starts-->
<?php include 'nav.php'; ?>
<!--nav ends-->
<body>
<div class="section"><?php echo $this->session->flashdata('select_number'); ?><?php echo $this->session->flashdata('select_plan'); ?></div>
<div class="container">
<center>
<form class="contact-form" method="post" action="<? echo base_url()."index.php/customer/add_plan_postpaid"; ?>">
    <select name='number'>
        <option value=' ' disabled selected>Choose your number</option>
        <? $sname='mobilepost';  $res = $this->customer_model->check_multiple($sname);
            foreach ($res as $obj) {
                echo "<option style='color:teal;' value='".$obj->number."'>".$obj->number."</option>";  
            }
            
         ?>
        </select>
</div><br>
<!-- START CONTENT -->
<section id="content ">
    <!--start container-->
    <div class="container"> 
        <div class="section">
            <div id="contact-page" class="card">
                <div class="card-content">
                    <div class="col s12 m6">
                        <!-- TABLE STARTS -->
                        <table class="bordered highlight centered responsive-table">
                            <thead>
                                <tr>
                                    <th>PLAN NAME</th>
                                    <th>TARRIF</th>
                                    <th>SELECT</th>
                                </tr>
                            </thead>

                            <tbody>
                                <? $res = $this->customer_model->return_all_plans_postpaid();
                                    foreach ($res as $obj) {
                                        echo "<tr>";
                                        echo "<td>".$obj->plan."</td>";
                                        echo "<td>".$obj->tariff."</td>";
                                        echo "<td>
                                        <input name='group1' type='radio' id='test1".$obj->plan."' value=' ".$obj->plan."' />
                                        <label for='test1".$obj->plan."'>Select</label>
                                            </td></tr>";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="input-field col s10 offset-s1 center-align">
            <button class="btn waves-effect waves-light indigo darken-4 " type="submit" name="action">Add Plan<i class="material-icons right">done</i>
            </button>
        </div>
    </div>
    
</section>
</form>
<div class="section"></div>
<!--DASHBOARD-->
<?php include 'footer.php'; ?>
<script type="text/javascript">
    $(document).ready(function() {
        $('select').material_select();
    });
</script>
</body>
</html>