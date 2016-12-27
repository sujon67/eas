<div>
    <?php
    $attributes = array('id' => 'punchForm', 'class' => 'col s12');
    echo form_open("PunchOut/forToday", $attributes)?>
    <div class="row">
        <div class="input-field col s12">
<!--            <label>Punchout</label>-->
            <input disabled id="punch" type="text" name="punchout" value="<?php echo date("Y-m-d H:i:s");?>" class="form-control form-inline ">
        </div>
    </div>

    <div class="row">
        <div class="input-field col s12">
            <textarea id="comment" class="materialize-textarea"></textarea>
            <label for="comment">Comment</label>
        </div>
    </div>
        <button id="submitBtn" type="submit">Punch out</button>
    <?php echo form_close()?>
</div>
