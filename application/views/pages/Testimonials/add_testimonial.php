<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Add Testimonial Form</a></li>
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
                    <label class="control-label" for="testimonial_heading">  Heading</label>
                    <div class="controls ">
                        <input type="text" class="input-xlarge " value="<?php echo set_value('testimonial_heading', $testimonial_heading); ?>" id="testimonial_heading" name="testimonial_heading" placeholder="e.g Enter your main heading..">
                        <span class="required text-danger"><?php echo form_error("testimonial_heading") ?></span>
                    </div>
                </div>

                <div class="control-group">

                    <label class="control-label" for="testimonial_text"> Tesimonial Text</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge " value="<?php echo set_value('testimonial_text', $testimonial_text); ?>" id="testimonial_text" name="testimonial_text" placeholder="e.g Enter your date..">
                        <span class="required text-danger"><?php echo form_error("testimonial_text") ?></span>

                    </div>

                </div>
                <div class="control-group">
                    <label class="control-label" for="testimonial_img"> Image</label>
                    <div class="controls">
                    <?php 
						if(!empty($old_img)){ ?>
							<img style="width: 240px; height:120px;" src="<?php echo base_url('back-end/uploads/').$old_img;?>" alt=""><br>
					<?php	}
						?>
                        <input type="file" class="input-xlarge " value="<?php echo set_value('testimonial_img',$testimonial_img);?>" id="testimonial_img" name="testimonial_img">
                        <span class="required text-danger" ><?php echo form_error("testimonial_img") ?></span>
                    </div>
                </div>
                <div class="control-group">

                    <label class="control-label" for="testimonial_mname"> Manager Name</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge " value="<?php echo set_value('testimonial_mname', $testimonial_mname); ?>" id="testimonial_mname" name="testimonial_mname" placeholder="e.g Enter your m name ..">
                        <span class="required text-danger"><?php echo form_error("testimonial_mname") ?></span>

                    </div>

                </div>

                <div class="control-group">

                    <label class="control-label" for="testimonial_mlink"> M Link</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge " value="<?php echo set_value('testimonial_mlink', $testimonial_mlink); ?>" id="testimonial_mlink" name="testimonial_mlink" placeholder="e.g Enter your m link ..">
                        <span class="required text-danger"><?php echo form_error("testimonial_mlink") ?></span>

                    </div>

                </div>
                <div class="control-group">

                    <label class="control-label" for="testimonial_discr">P Manager</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge " value="<?php echo set_value('testimonial_discr', $testimonial_discr); ?>" id="testimonial_discr" name="testimonial_discr" placeholder="e.g Enter your P name..">
                        <span class="required text-danger"><?php echo form_error("testimonial_discr") ?></span>

                    </div>

                </div>

                




                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="reset" class="btn">Cancel</button>
                </div>
            </fieldset>
        </form>

    </div>