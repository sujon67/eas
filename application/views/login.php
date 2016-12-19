<!DOCTYPE html>
<html>
<head>
    <title>Log in</title>
    <link href="<?php echo base_url(); ?>Assets/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>Assets/bootstrap/css/bootstrap-theme.min.css" type="text/css" rel="stylesheet">
    <link href="<?php echo base_url();?>Assets/jquery-ui-1.12.1.custom/jquery-ui.theme.min.css" type="text/css" rel="stylesheet">
    <link href="<?php echo base_url();?>Assets/jquery-ui-1.12.1.custom/jquery-ui.structure.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class=" col-lg-5 col-lg-offset-3">
    <form  method="post" action="<?php echo base_url();?>Login/validation">
        <h2 class="form-signin-heading">Please login</h2>
        <div class="form-group">
            <label class="">
                User name
            </label>
            <input type="text" class="form-control form-inline" name="username" value="<?php echo set_value("username")?>"  autofocus="">
            <span style="color:brown"><?php echo form_error("username");?></span>
            <span style="color:brown">
                    <?php if ($this->session->flashdata('notification')) {
                        echo $this->session->flashdata('notification');
                    }?>
            </span>
        </div>

        <div class="form-group">
            <label class="">
                Password
            </label>
            <input type="password" class="form-control form-inline" name="password" value="<?php echo set_value("username")?>" autofocus="">
            <span style="color:brown"><?php echo form_error("password");?></span>
            <span style="color:brown">
                    <?php if ($this->session->flashdata('notification2')) {
                        echo $this->session->flashdata('notification2');
                    }?>
            </span>
        </div>

        <button href="" class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
    </form>
    </div>
</div>
</body>
</html>
