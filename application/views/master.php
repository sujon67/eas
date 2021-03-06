<!DOCTYPE html>
<html>
<head>
    <title>E.A.S</title>
<!--    <link href="--><?php //echo base_url(); ?><!--Assets/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">-->
<!--    <link href="--><?php //echo base_url(); ?><!--Assets/bootstrap/css/bootstrap-theme.min.css" type="text/css" rel="stylesheet">-->
    <link href="<?php echo base_url();?>Assets/jquery-ui-1.12.1.custom/jquery-ui.theme.min.css" type="text/css" rel="stylesheet">
    <link href="<?php echo base_url();?>Assets/jquery-ui-1.12.1.custom/jquery-ui.structure.css" type="text/css" rel="stylesheet">
    <link href="<?php echo base_url();?>Assets/materialize/css/materialize.css" type="text/css" rel="stylesheet">
    <link href="<?php echo base_url();?>Assets/css/style.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.materialdesignicons.com/1.7.22/css/materialdesignicons.min.css">
<style rel="stylesheet" type="text/css">
    /* label focus color */
    .input-field input[type=text]:focus + label {
    color: #0d3349;
    }
    /* label underline focus color */
    .input-field input[type=text]:focus {
    border-bottom: 1px solid #000;
    box-shadow: 0 1px 0 0 #000;
    }
</style>
</head>
<body>
<div class="container-fluid">
    <nav class=" blue">
        <div class="nav-wrapper">
            <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="left hide-on-med-and-down">
                <li><a href="<?php echo base_url();?>">Home</a></li>
                <li><a href="<?php echo base_url();?>Register/employee">Register Employee</a></li>
                <li><a href="<?php echo base_url();?>Designation/designation">New Designations</a></li>
                <li><a href="<?php echo base_url();?>Employee/info">Employee List</a></li>
                <li><a href="<?php echo base_url();?>Bill/generate">Generate bill</a></li>
                <li><a href="<?php echo base_url();?>PunchOut/form">Punch out</a></li>
                <li><a href="<?php echo base_url();?>Attendence/history">Summary</a></li>
                <li><a href="<?php echo base_url();?>Logout">Log out</a></li>
            </ul>
            <ul class="side-nav" id="mobile-menu">
                <li><a href="<?php echo base_url();?>">Home</a></li>
                <li><a href="<?php echo base_url();?>Register/employee">Register Employee</a></li>
                <li><a href="<?php echo base_url();?>Designation/designation">New Designations</a></li>
                <li><a href="<?php echo base_url();?>Employee/info">Employee List</a></li>
                <li><a href="<?php echo base_url();?>PunchOut/form">Punch out</a></li>
                <li><a href="<?php echo base_url();?>Attendence/history">Summary</a></li>
                <li><a href="<?php echo base_url();?>Logout">Log out</a></li>
            </ul>
        </div>
    </nav>
    <div class="row "></div>
     <div class="col m12 s12">
        {page_content}
     </div>
</div>
<footer>
    <script src="<?php echo base_url();?>Assets/jquery-ui-1.12.1.custom/external/jquery/jquery.js" type="text/javascript" ></script>
    <script src="<?php echo base_url();?>Assets/jquery-ui-1.12.1.custom/jquery-ui.js" type="text/javascript" ></script>
<!--    <script src="--><?php //echo base_url();?><!--Assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>-->
    <script src="<?php echo base_url();?>Assets/js/notify.js" type="text/javascript" ></script>
    <script src="<?php echo base_url();?>Assets/materialize/js/materialize.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>Assets/pickadate.js/lib/picker.js" type="text/javascript"></script>
<!--    <script src="--><?php //echo base_url();?><!--Assets/wizard/bootstrap/js/bootstrap.min.js"></script>-->
<!--    <script src="--><?php //echo base_url();?><!--Assets/wizard/jquery.bootstrap.wizard.js"></script>-->
    <script src="<?php echo base_url();?>Assets/js/custom.js" type="text/javascript" ></script>
    <script src="<?php echo base_url();?>Assets/js/salaryAllowence.js" type="text/javascript"></script>

    <script>


    </script>


</footer>
</body>
</html>