
<div class="page-header">
    <h2 class="text-center">Employee registration form</h2>
    <?php if ($this->session->flashdata('success')) { ?>
        <div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Congratulation!</strong> <?php echo $this->session->flashdata("success")?>.
        </div>
        <?php
    }
    ?>
</div>

<div class="container-fluid form-horizontal">
    <?php echo form_open('Register/validate')?>
    <div class =" col-lg-6 ">
        <div class="form-group">
            <label>
                Name (<span style="color:red" >*</span>):
            </label>
            <span style="color:#a61717;"><?php  echo form_error('name');?></span>
            <input type="text" name="name" value="<?php echo set_value('name')?>" class="form-control  form-inline">
        </div>

        <div class="form-group">
            <label>
                Gender(<span style="color:red">*</span>):
            </label>
            <span style="color:#a61717;"><?php echo form_error('gender');?></span>
            <div class="radio">
                <label><input id="gender1" name="gender" class="" type="radio" value="male">Male</label>
            </div>
            <div class="radio">
                <label><input id="gender2" name="gender" class="" type="radio" value="female" >Female</label>
            </div>
        </div>
        <div class="form-group">
            <label>
                Date of birth (<span style="color:red" >*</span>):
            </label>
            <span style="color:#a61717;"><?php echo form_error('date_birth')?></span>
            <input id="date_picker1" type="text" name="date_birth" value="<?php echo set_value('date_birth')?>" class="form-control form-inline">
        </div>
<!--        <div class="form-group">-->
<!--            <label>-->
<!--                Joining date (<span style="color:red" >*</span>):-->
<!--            </label>-->
<!--            <span style="color:#a61717;">--><?php //echo form_error('join_date')?><!--</span>-->
<!--            <input id="date_picker2" type="text" name="join_date" value="--><?php //echo set_value('join_date')?><!--" class="form-control form-inline">-->
<!--        </div>-->
        <div class="form-group">
            <label>
                NID     (<span style="color:red" >*</span>):
            </label>
            <span style="color:#a61717;"><?php echo form_error('user_name')?></span>
            <input id="userName" type="text" name="user_name" value="<?php echo set_value('user_name')?>" class="form-control form-inline">
        </div>
        <div class="form-group">
            <label>
                User name (<span style="color:red" >*</span>):
            </label>
            <span style="color:#a61717;"><?php echo form_error('user_name')?></span>
            <input id="userName" type="text" name="user_name" value="<?php echo set_value('user_name')?>" class="form-control form-inline">
        </div>
        <div class="form-group">
            <div id="usernameComment"></div>
        </div>
<!--        <div class="form-group">-->
<!--            <label>-->
<!--                Password (<span style="color:red" >*</span>):-->
<!--            </label>-->
<!--            --><?php //echo form_error('password')?>
<!--            <input id="password" type="password" name="password" class="form-control form-inline">-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <label>-->
<!--                Retype Password (<span style="color:red" >*</span>):-->
<!--            </label>-->
<!--            <input id="verify" type="password" class="form-control form-inline">-->
<!--        </div>-->
        <div class="form-group" style="color:#a61717">
            <div id="matched"></div>
        </div>
        <div class="form-group" style="color:#a61717">
            <div id="misMatched"></div>
        </div>
        <button id="submitBtn" class="btn btn-success" type="submit" disabled >Submit</button><div class="col-lg-2"></div> <button class="btn btn-primary" type="reset">Reset</button>
    </div>
    <?php echo form_close();?>
</div>