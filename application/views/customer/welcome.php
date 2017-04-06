<html>
<head>
    <title>Vibgyor India Pvt Ltd</title>
    <link rel="icon" href="<? echo base_url()."images/login-logo.png"; ?>" sizes="32x32">
    <link rel="stylesheet" href="<? echo base_url()."css/materialize.min.css"; ?>">
    <link rel="stylesheet" href="<? echo base_url()."css/icon.css"; ?>">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<? echo base_url()."css/style.css"; ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>

<!--nav starts-->
<?php include 'nav.php'; ?>
<!--nav ends-->
<body class="">
<div class="section"></div>
<div class="container">
    <h6><? echo "Welcome, ".$name = $this->customer_model->get_name(); echo "<br>".$this->session->tempdata('check'); ?></h6>
    <div class="row z-depth-3">
        <a href="<? echo base_url()."index.php/customer/linktomobile";?>">
        <div class="col s3 m3  btn-primary waves-effect waves-light  white-text light-blue" style="height:4%;">
            <center>MOBILE</center>
        </div>
        </a>
        <a href="<? echo base_url()."index.php/customer/linktodataservices";?>">
        <div class="col s3 m3 btn-primary waves-effect waves-light  white-text light-blue" style="height:4%;">
            <center>DATA SERVICE</center>
        </div>
        </a>
        <a href="<? echo base_url()."index.php/customer/linktodth";?>">
        <div class="col s3 m3 btn-primary waves-effect waves-light  white-text light-blue" style="height:4%;">
            <center>DTH</center>
        </div>
        </a>
        <a href="<? echo base_url()."index.php/customer/linktonewcon";?>">
        <div class="col s3 m3 btn-primary waves-effect waves-light  white-text light-blue" style="height:4%;">
            <center>NEW CONNECTION</center>
        </div>
        </a>
    </div>
</div>

<!--card stats start-->
<div id="card-stats" class="container">
    <div class="row">
        <div class="col s12 m6 l3">
            <div class="card">
                <div class="card-content teal white-text">
                    <p class="card-stats-title">On First Recharge!</p>
                    <p class="card-stats-compare">Get 25% Dicount</p>
                    <h5 class="card-stats-number">VIB2550</h5>
                </div>
                <div class="card-action teal darken-2">
                    <input id="copyTarget" value="VIB2550">
                    <br>
                    <br> <a class="waves-effect waves-light btn white-text" id="copyButton">Promo Code</a>
                    <br>
                    <br>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card">
                <div class="card-content pink lighten-1 white-text">
                    <p class="card-stats-title">DTH Recharge Offer</p>
                    <p class="card-stats-compare">Get 20% Discount
                    </p>
                    <h5 class="card-stats-number">VIB20DT</h5>
                </div>
                <div class="card-action  pink darken-2">
                    <input id="copyTarget" value="VIB20DT">
                    <br>
                    <br> <a class="waves-effect waves-light btn pink lighten-1 white-text" id="copyButton">Promo Code</a>
                    <br>
                    <br>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card">
                <div class="card-content blue-grey white-text">
                    <p class="card-stats-title">On Recharge on 1GB </p>
                    <p class="card-stats-compare">Get 100MB Data Extra
                    </p>
                    <h5 class="card-stats-number">VIB100I</h5>
                </div>
                <div class="card-action blue-grey darken-2">
                    <input id="copyTarget" value="VIB100I">
                    <br>
                    <br> <a class="waves-effect waves-light btn blue-grey  white-text" id="copyButton">Promo Code</a>
                    <br>
                    <br>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card">
                <div class="card-content purple white-text">
                    <p class="card-stats-title"> Offering 3GB Data with every new connection.</p>

                    <h5 class="card-stats-number">VIBNEW</h5>

                </div>
                <div class="card-action purple darken-2">
                    <input id="copyTarget" value="VIB100I">
                    <br>
                    <br> <a class="waves-effect waves-light btn purple darken-2  white-text" id="copyButton">Promo Code</a>
                    <br>
                    <br>
                </div>
            </div>
        </div>

    </div>
</div>




<div id="work-collections" class="container">
    <div class="row">
        <div class="col s12 m12 l6">
            <ul id="projects-collection" class="collection">
                <li class="collection-item avatar">
                    <i class="mdi-file-folder circle light-blue darken-2"></i>
                    <span class="collection-header">Projects</span>
                    <p>Your Favorites</p>
                    <a href="#" class="secondary-content"><i class="mdi-action-grade"></i></a>
                </li>
                <li class="collection-item">
                    <div class="row">
                        <div class="col s6">
                            <p class="collections-title">Web App</p>
                            <p class="collections-content">AEC Company</p>
                        </div>
                        <div class="col s3">
                            <span class="task-cat cyan">Development</span>
                        </div>
                        <div class="col s3">
                            <div id="project-line-1"></div>
                        </div>
                    </div>
                </li>
                <li class="collection-item">
                    <div class="row">
                        <div class="col s6">
                            <p class="collections-title">Mobile App for Social</p>
                            <p class="collections-content">iSocial App</p>
                        </div>
                        <div class="col s3">
                            <span class="task-cat grey darken-3">UI/UX</span>
                        </div>
                        <div class="col s3">
                            <div id="project-line-2"></div>
                        </div>
                    </div>
                </li>
                <li class="collection-item">
                    <div class="row">
                        <div class="col s6">
                            <p class="collections-title">Website</p>
                            <p class="collections-content">MediTab</p>
                        </div>
                        <div class="col s3">
                            <span class="task-cat teal">Marketing</span>
                        </div>
                        <div class="col s3">
                            <div id="project-line-3"></div>
                        </div>
                    </div>
                </li>
                <li class="collection-item">
                    <div class="row">
                        <div class="col s6">
                            <p class="collections-title">AdWord campaign</p>
                            <p class="collections-content">True Line</p>
                        </div>
                        <div class="col s3">
                            <span class="task-cat green">SEO</span>
                        </div>
                        <div class="col s3">
                            <div id="project-line-4"></div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col s12 m12 l6">
            <ul id="issues-collection" class="collection">
                <li class="collection-item avatar">
                    <i class="mdi-action-bug-report circle red darken-2"></i>
                    <span class="collection-header">Issues</span>
                    <p>Assigned to you</p>
                    <a href="#" class="secondary-content"><i class="mdi-action-grade"></i></a>
                </li>
                <li class="collection-item">
                    <div class="row">
                        <div class="col s7">
                            <p class="collections-title"><strong>#102</strong> Home Page</p>
                            <p class="collections-content">Web Project</p>
                        </div>
                        <div class="col s2">
                            <span class="task-cat pink accent-2">P1</span>
                        </div>
                        <div class="col s3">
                            <div class="progress">
                                <div class="determinate" style="width: 70%"></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="collection-item">
                    <div class="row">
                        <div class="col s7">
                            <p class="collections-title"><strong>#108</strong> API Fix</p>
                            <p class="collections-content">API Project </p>
                        </div>
                        <div class="col s2">
                            <span class="task-cat yellow darken-4">P2</span>
                        </div>
                        <div class="col s3">
                            <div class="progress">
                                <div class="determinate" style="width: 40%"></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="collection-item">
                    <div class="row">
                        <div class="col s7">
                            <p class="collections-title"><strong>#205</strong> Profile page css</p>
                            <p class="collections-content">New Project </p>
                        </div>
                        <div class="col s2">
                            <span class="task-cat light-green darken-3">P3</span>
                        </div>
                        <div class="col s3">
                            <div class="progress">
                                <div class="determinate" style="width: 95%"></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="collection-item">
                    <div class="row">
                        <div class="col s7">
                            <p class="collections-title"><strong>#188</strong> SAP Changes</p>
                            <p class="collections-content">SAP Project</p>
                        </div>
                        <div class="col s2">
                            <span class="task-cat pink accent-2">P1</span>
                        </div>
                        <div class="col s3">
                            <div class="progress">
                                <div class="determinate" style="width: 10%"></div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<!--work collections end-->



<div class="container ">
    <ul class="collapsible" data-collapsible="accordion">
        <li>
            <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..</span>
            </div>
        </li>
        <li>
            <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span>
            </div>
        </li>
        <li>
            <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
        </li>
    </ul>
</div>   
<div class="section"></div>
<?php include 'footer.php'; ?>

<script>
document.getElementById("copyButton").addEventListener("click", function() {
    copyToClipboard(document.getElementById("copyTarget"));
});
 
function copyToClipboard(elem) {
      // create hidden text element, if it doesn't already exist
    var targetId = "_hiddenCopyText_";
    var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
    var origSelectionStart, origSelectionEnd;
    if (isInput) {
        // can just use the original source element for the selection and copy
        target = elem;
        origSelectionStart = elem.selectionStart;
        origSelectionEnd = elem.selectionEnd;
    } else {
        // must use a temporary form element for the selection and copy
        target = document.getElementById(targetId);
        if (!target) {
            var target = document.createElement("textarea");
            target.style.position = "absolute";
            target.style.left = "-9999px";
            target.style.top = "0";
            target.id = targetId;
            document.body.appendChild(target);
        }
        target.textContent = elem.textContent;
    }
    // select the content
    var currentFocus = document.activeElement;
    target.focus();
    target.setSelectionRange(0, target.value.length);
     
    // copy the selection
    var succeed;
    try {
          succeed = document.execCommand("copy");
    } catch(e) {
        succeed = false;
    }
    // restore original focus
    if (currentFocus && typeof currentFocus.focus === "function") {
        currentFocus.focus();
    }
     
    if (isInput) {
        // restore prior selection
        elem.setSelectionRange(origSelectionStart, origSelectionEnd);
    } else {
        // clear temporary content
        target.textContent = "";
    }
    return succeed;
}
</script>
<script>
document.getElementById("copyButton").addEventListener("click", function() {
    copyToClipboard(document.getElementById("copyTarget"));
});
 
function copyToClipboard(elem) {
      // create hidden text element, if it doesn't already exist
    var targetId = "_hiddenCopyText_";
    var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
    var origSelectionStart, origSelectionEnd;
    if (isInput) {
        // can just use the original source element for the selection and copy
        target = elem;
        origSelectionStart = elem.selectionStart;
        origSelectionEnd = elem.selectionEnd;
    } else {
        // must use a temporary form element for the selection and copy
        target = document.getElementById(targetId);
        if (!target) {
            var target = document.createElement("textarea");
            target.style.position = "absolute";
            target.style.left = "-9999px";
            target.style.top = "0";
            target.id = targetId;
            document.body.appendChild(target);
        }
        target.textContent = elem.textContent;
    }
    // select the content
    var currentFocus = document.activeElement;
    target.focus();
    target.setSelectionRange(0, target.value.length);
     
    // copy the selection
    var succeed;
    try {
          succeed = document.execCommand("copy");
    } catch(e) {
        succeed = false;
    }
    // restore original focus
    if (currentFocus && typeof currentFocus.focus === "function") {
        currentFocus.focus();
    }
     
    if (isInput) {
        // restore prior selection
        elem.setSelectionRange(origSelectionStart, origSelectionEnd);
    } else {
        // clear temporary content
        target.textContent = "";
    }
    return succeed;
}
</script>
<script>
document.getElementById("copyButton").addEventListener("click", function() {
    copyToClipboard(document.getElementById("copyTarget"));
});
 
function copyToClipboard(elem) {
      // create hidden text element, if it doesn't already exist
    var targetId = "_hiddenCopyText_";
    var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
    var origSelectionStart, origSelectionEnd;
    if (isInput) {
        // can just use the original source element for the selection and copy
        target = elem;
        origSelectionStart = elem.selectionStart;
        origSelectionEnd = elem.selectionEnd;
    } else {
        // must use a temporary form element for the selection and copy
        target = document.getElementById(targetId);
        if (!target) {
            var target = document.createElement("textarea");
            target.style.position = "absolute";
            target.style.left = "-9999px";
            target.style.top = "0";
            target.id = targetId;
            document.body.appendChild(target);
        }
        target.textContent = elem.textContent;
    }
    // select the content
    var currentFocus = document.activeElement;
    target.focus();
    target.setSelectionRange(0, target.value.length);
     
    // copy the selection
    var succeed;
    try {
          succeed = document.execCommand("copy");
    } catch(e) {
        succeed = false;
    }
    // restore original focus
    if (currentFocus && typeof currentFocus.focus === "function") {
        currentFocus.focus();
    }
     
    if (isInput) {
        // restore prior selection
        elem.setSelectionRange(origSelectionStart, origSelectionEnd);
    } else {
        // clear temporary content
        target.textContent = "";
    }
    return succeed;
}
</script>
<script>
document.getElementById("copyButton").addEventListener("click", function() {
    copyToClipboard(document.getElementById("copyTarget"));
});
 
function copyToClipboard(elem) {
      // create hidden text element, if it doesn't already exist
    var targetId = "_hiddenCopyText_";
    var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
    var origSelectionStart, origSelectionEnd;
    if (isInput) {
        // can just use the original source element for the selection and copy
        target = elem;
        origSelectionStart = elem.selectionStart;
        origSelectionEnd = elem.selectionEnd;
    } else {
        // must use a temporary form element for the selection and copy
        target = document.getElementById(targetId);
        if (!target) {
            var target = document.createElement("textarea");
            target.style.position = "absolute";
            target.style.left = "-9999px";
            target.style.top = "0";
            target.id = targetId;
            document.body.appendChild(target);
        }
        target.textContent = elem.textContent;
    }
    // select the content
    var currentFocus = document.activeElement;
    target.focus();
    target.setSelectionRange(0, target.value.length);
     
    // copy the selection
    var succeed;
    try {
          succeed = document.execCommand("copy");
    } catch(e) {
        succeed = false;
    }
    // restore original focus
    if (currentFocus && typeof currentFocus.focus === "function") {
        currentFocus.focus();
    }
     
    if (isInput) {
        // restore prior selection
        elem.setSelectionRange(origSelectionStart, origSelectionEnd);
    } else {
        // clear temporary content
        target.textContent = "";
    }
    return succeed;
}
</script>

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="<? echo base_url()."js/materialize.js";?>"></script>
<script src="<? echo base_url()."js/init.js";?>"></script>
<script type="text/javascript">$(".button-collapse").sideNav();</script>
<script>

</script>
</html>