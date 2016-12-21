<div class="row">
    <form class="col m12 s12">
    <div class="col m6">
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
    </div>
        <div class="col m1"></div>
    <div class="col m5">
        <h4>Salary and allowence</h4>
        <div class="row">
            <div class="input-field col s12">
                <i class="mdi mdi-account-network prefix"></i>
                <select id="designation">
                    <option value="" disabled selected>Choose your designation</option>
                    <option value="1">SPO</option>
                    <option value="2">PO</option>
                    <option value="3">Officer</option>
                    <option value="4">Jr Officer</option>
                    <option value="5">C cum C</option>
                    <option value="6">Care taker</option>
                    <option value="7">Guard</option>
                    <option value="8">Helper</option>
                </select>
            </div>
        </div>
         <div id="salaAllow"></div>
        <div class="row">
            <div class="input-field col s12">
                <i class="">Total</i>
                <input type="text" id="total" value="" readonly>

            </div>
        </div>
    </div>
    </form>
</div>