<div>
    <?php
    $attributes = array('id' => 'punchForm');
    echo form_open("PunchOut/forToday", $attributes)?>
        <div class="col-lg-6">
            <div class="form-group">
                <label>Punchout</label>
                <input disabled id="punch" type="text" name="punchout" value="<?php echo date("Y-m-d H:i:s");?>" class="form-control form-inline ">
            </div>
            <div class="form-group">
                <label>Comment</label>
                <textarea id="comment" class="form-control form-inline" name="comment"></textarea>
            </div>
        <button id="submitBtn" type="submit">Punch out</button>
    </div>
    <?php echo form_close()?>
</div>
