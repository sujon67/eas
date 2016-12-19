<div class="row">
    <form class="col m12 s12">
    <div class="col m6">
        <div class="row">
            <div class="input-field">
                <input type="text" name="name" id="name" value="<?php echo set_value('name')?>" class="validate">
                <label for="name">Name</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field">
                <p>
                <input type="radio"  name="gender" id="gender1" value="male" class="with-gap">
                <label for="gender1">Male</label>

                <input type="radio" name="gender" id="gender2" value="female" class="with-gap">
                <label for="gender2">Female</label>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="input-field">
                <input id="date_picker1" type="text" name="date_birth" value="<?php echo set_value('date_birth')?>" class="form-control form-inline">
                <label for="date_picker1">Birth date</label>
            </div>
        </div>

        <div class="row">
        <div class="input-field">
            <input type="text" name="nid" id="nid" value="<?php echo set_value('nid')?>" class="validate">
            <label for="nid">NID</label>
        </div>
        </div>
    </div>
    <div class="col m6">

    </div>
    </form>
</div>