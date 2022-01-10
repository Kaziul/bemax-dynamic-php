<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Add Features Form</a></li>
</ul>
<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>

        <div class="box-icon">
            <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
            <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
            <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
        </div>
    </div>
    <div class="box-content">
        <form class="form-horizontal" action="<?php base_url() ?>" method="POST" enctype="multipart/form-data">
            <fieldset>
                <p>
                    <?php
                    $messeage = $this->session->userdata('messeage');
                    if ($messeage) {
                        echo  "<span class='alert alert-danger'>$messeage</span>";
                        $this->session->unset_userdata('messeage');
                    }
                    ?>
                </p><br>
                <div class="control-group">
                    <label class="control-label" for="feature_heading">F Heading</label>
                    <div class="controls ">
                        <input type="text" class="input-xlarge " value="<?php echo set_value('feature_heading', $feature_heading); ?>" id="feature_heading" name="feature_heading" placeholder="e.g Enter your feature heading..">
                        <span class="required text-danger"><?php echo form_error("feature_heading") ?></span>
                    </div>
                </div>
            
                <div class="control-group">

                    <label class="control-label" for="feature_about">F About</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge " value="<?php echo set_value('feature_about', $feature_about); ?>" id="feature_about" name="feature_about" placeholder="e.g Enter your feature about..">
                        <span class="required text-danger"><?php echo form_error("feature_about") ?></span>

                    </div>

                </div>

                <div class="control-group">

                    <label class="control-label" for="feature_aLink">A Link</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge " value="<?php echo set_value('feature_aLink', $feature_aLink); ?>" id="feature_aLink" name="feature_aLink" placeholder="e.g Enter your a link ..">
                        <span class="required text-danger"><?php echo form_error("feature_aLink") ?></span>

                    </div>

                </div>
                <div class="control-group">

                    <label class="control-label" for="feature_story">F Story</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge " value="<?php echo set_value('feature_story', $feature_story); ?>" id="feature_story" name="feature_story" placeholder="e.g Enter your f Story..">
                        <span class="required text-danger"><?php echo form_error("feature_story") ?></span>

                    </div>

                </div>
                <div class="control-group">

                    <label class="control-label" for="feature_sLink">S Link</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge " value="<?php echo set_value('feature_sLink', $feature_sLink); ?>" id="feature_sLink" name="feature_sLink" placeholder="e.g Enter your s link..">
                        <span class="required text-danger"><?php echo form_error("feature_sLink") ?></span>

                    </div>

                </div>
                <div class="control-group">

                    <label class="control-label" for="feature_Conditon">F Condition</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge " value="<?php echo set_value('feature_Conditon', $feature_Conditon); ?>" id="feature_Conditon" name="feature_Conditon" placeholder="e.g Enter your f condition..">
                        <span class="required text-danger"><?php echo form_error("feature_Conditon") ?></span>

                    </div>

                </div>
                <div class="control-group">

                    <label class="control-label" for="feature_cLink">C Link</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge " value="<?php echo set_value('feature_cLink', $feature_cLink); ?>" id="feature_cLink" name="feature_cLink" placeholder="e.g Enter your c link..">
                        <span class="required text-danger"><?php echo form_error("feature_cLink") ?></span>

                    </div>

                </div>
                <div class="control-group">

                    <label class="control-label" for="feature_policy">F Policy</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge " value="<?php echo set_value('feature_policy', $feature_policy); ?>" id="feature_policy" name="feature_policy" placeholder="e.g Enter your f Policy..">
                        <span class="required text-danger"><?php echo form_error("feature_policy") ?></span>

                    </div>

                </div>
                <div class="control-group">

                    <label class="control-label" for="feature_pLink">P Link</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge " value="<?php echo set_value('feature_pLink', $feature_pLink); ?>" id="feature_pLink" name="feature_pLink" placeholder="e.g Enter your p link..">
                        <span class="required text-danger"><?php echo form_error("feature_pLink") ?></span>

                    </div>

                </div>
                <div class="control-group">

                    <label class="control-label" for="feature_map">F Map</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge " value="<?php echo set_value('feature_map', $feature_map); ?>" id="feature_map" name="feature_map" placeholder="e.g Enter your f map..">
                        <span class="required text-danger"><?php echo form_error("feature_map") ?></span>

                    </div>

                </div>
                <div class="control-group">

                    <label class="control-label" for="feature_mLink">M Link</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge " value="<?php echo set_value('feature_mLink', $feature_mLink); ?>" id="feature_mLink" name="feature_mLink" placeholder="e.g Enter your m link..">
                        <span class="required text-danger"><?php echo form_error("feature_mLink") ?></span>

                    </div>

                </div>

                




                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="reset" class="btn">Cancel</button>
                </div>
            </fieldset>
        </form>

    </div>