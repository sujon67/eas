<div class="row">
    <form class="col m12 s12">
        <div class="col s3"></div>
    <div class="col m6 personelInfo">
        <h4>Personel information</h4>
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">person_pin</i>
                <input type="text" name="name" id="name" value="<?php echo set_value('name')?>" class="validate">
                <label for="name">Name</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <p>
                <input type="radio"  name="gender" id="gender1" value="male" class="with-gap">
                <label for="gender1">Male</label>
                <i class=" mdi mdi-gender-male"></i>

                <input type="radio" name="gender" id="gender2" value="female" class="with-gap">
                <label for="gender2">Female</label>
                <i class=" mdi mdi-gender-female"></i>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <i class="mdi mdi-calendar-check prefix"></i>
                <input id="date_picker1" type="text" name="date_birth" value="<?php echo set_value('date_birth')?>" class="form-control form-inline">
                <label for="date_picker1">Birth date</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <i class="mdi mdi-pencil prefix"></i>
                <input type="text" name="nid" id="nid" value="<?php echo set_value('nid')?>" class="validate">
                <label for="nid">NID</label>
            </div>
        </div>

        <div class="row">
            <div class="file-field input-field">
                <i class="mdi mdi-file-image prefix"></i>
                <div>
                <div class="btn">
                    <span>Upload</span>
                    <input type="file" name="profilePic">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
                </div>
            </div>
        </div>
        <button class="btn right">Submit</button>
    </div>
        <div class="col s3"></div>
    </form>
</div>