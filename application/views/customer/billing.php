<html>

<head>
    <title>Bill</title>
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

<div class="section"><?php echo $this->session->tempdata('select_number'); ?><?php echo $this->session->tempdata('select_plan'); ?></div>
<div class="container">
<center>
<form class="contact-form" method="post" action="<? echo base_url()."index.php/customer/pay_bill"; ?>">
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
                                    <th>Last Date</th>
                                    <th>Amount</th>
                                    <th>Number</th>
                                    <th>Service Name</th>
                                </tr>
                            </thead>

                            <tbody>
                                <? $res = $this->user_model->return_invoice();
                                    foreach ($res as $obj) {
                                        echo "<tr>";
                                        echo "<td>".$obj->plan."</td>";
                                        echo "<td>".$obj->last_date."</td>";
                                        echo "<td>".$obj->amount."</td>";
                                        echo "<td>".$obj->number."</td>";
                                        echo "<td>".$obj->service."</td>";
                                        echo "<td></tr>";
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
            <button class="btn waves-effect waves-light indigo darken-4 " type="submit" name="action">Pay<i class="material-icons right">done</i>
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