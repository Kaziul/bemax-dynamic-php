<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Add Media Form</a></li>
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
                    <label class="control-label" for="smedia_logolink">Logo Link</label>
                    <div class="controls ">
                        <input type="text" class="input-xlarge " value="<?php echo set_value('smedia_logolink', $smedia_logolink); ?>" id="smedia_logolink" name="smedia_logolink" placeholder="e.g Enter your logo link..">
                        <span class="required text-danger"><?php echo form_error("smedia_logolink") ?></span>
                    </div>
                </div>
              
                <div class="control-group">
                    <label class="control-label" for="smedia_logo"> Image</label>
                    <div class="controls">
                    <?php 
						if(!empty($old_img)){ ?>
							<img style="width: 240px; height:120px;" src="<?php echo base_url('back-end/uploads/').$old_img;?>" alt=""><br>
					<?php	}
						?>
                        <input type="file" class="input-xlarge " value="<?php  echo set_value('smedia_logo',$smedia_logo);?>" id="smedia_logo" name="smedia_logo">
                        <span class="required text-danger" ><?php echo form_error("smedia_logo") ?></span>
                    </div>
                </div>
                <div class="control-group">

                    <label class="control-label" for="smedia_text"> Media Text</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge " value="<?php echo set_value('smedia_text', $smedia_text); ?>" id="smedia_text" name="smedia_text" placeholder="e.g Enter your smedia text ..">
                        <span class="required text-danger"><?php echo form_error("smedia_text") ?></span>

                    </div>

                </div>

                <div class="control-group">

                    <label class="control-label" for="smedia_fblink">Facebook Link</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge " value="<?php echo set_value('smedia_fblink', $smedia_fblink); ?>" id="smedia_fblink" name="smedia_fblink" placeholder="e.g Enter your fb link ..">
                        <span class="required text-danger"><?php echo form_error("smedia_fblink") ?></span>

                    </div>

                </div>
                <div class="control-group">

                    <label class="control-label" for="smedia_fbicon">Facebook Icon</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge " value="<?php echo set_value('smedia_fbicon', $smedia_fbicon); ?>" id="smedia_fbicon" name="smedia_fbicon" placeholder="e.g Enter your fb icon..">
                        <span class="required text-danger"><?php echo form_error("smedia_fbicon") ?></span>

                    </div>

                </div>
                <div class="control-group">

                    <label class="control-label" for="smedia_twlink">Twitter Link</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge " value="<?php echo set_value('smedia_twlink', $smedia_twlink); ?>" id="smedia_twlink" name="smedia_twlink" placeholder="e.g Enter your tw link..">
                        <span class="required text-danger"><?php echo form_error("smedia_twlink") ?></span>

                    </div>

                </div>
                <div class="control-group">

                    <label class="control-label" for="smedia_twicon">Twitter Icon</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge " value="<?php echo set_value('smedia_twicon', $smedia_twicon); ?>" id="smedia_twicon" name="smedia_twicon" placeholder="e.g Enter your tw icon..">
                        <span class="required text-danger"><?php echo form_error("smedia_twicon") ?></span>

                    </div>

                </div>
                <div class="control-group">

                    <label class="control-label" for="smedia_golink">Google Link</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge " value="<?php echo set_value('smedia_golink', $smedia_golink); ?>" id="smedia_golink" name="smedia_golink" placeholder="e.g Enter your go link..">
                        <span class="required text-danger"><?php echo form_error("smedia_golink") ?></span>

                    </div>

                </div>
                <div class="control-group">

                    <label class="control-label" for="smedia_goicon">Google Icon</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge " value="<?php echo set_value('smedia_goicon', $smedia_goicon); ?>" id="smedia_goicon" name="smedia_goicon" placeholder="e.g Enter your go icon..">
                        <span class="required text-danger"><?php echo form_error("smedia_goicon") ?></span>

                    </div>

                </div>
                <div class="control-group">

                    <label class="control-label" for="smedia_ldlink">linkedin Link</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge " value="<?php echo set_value('smedia_ldlink', $smedia_ldlink); ?>" id="smedia_ldlink" name="smedia_ldlink" placeholder="e.g Enter your ld link..">
                        <span class="required text-danger"><?php echo form_error("smedia_ldlink") ?></span>

                    </div>

                </div>
                <div class="control-group">

                    <label class="control-label" for="smedia_ldicon">linkedin Icon</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge " value="<?php echo set_value('smedia_ldicon', $smedia_ldicon); ?>" id="smedia_ldicon" name="smedia_ldicon" placeholder="e.g Enter your ld icon..">
                        <span class="required text-danger"><?php echo form_error("smedia_ldicon") ?></span>

                    </div>

                </div>

                




                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="reset" class="btn">Cancel</button>
                </div>
            </fieldset>
        </form>

    </div>