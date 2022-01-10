<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Add Header Form</a></li>
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
                    <!-- <label class="control-label" for="header_logo"> Current Logo</label> -->
                    <div class="controls">
                   <img  src="<?php echo base_url('back-end/uploads/') .$logo;?>" alt="">
                   
                    </div>
                </div>
             
                <div class="control-group">
                    <label class="control-label" for="header_logo"> Logo</label>
                    <div class="controls">
                        <input type="file" class="input-xlarge " value="<?php echo set_value('header_logo',$header_logo);?>" id="header_logo" name="header_logo">
                        <input type="hidden" name="old_file" value="echo your old file name"/>
                        <span class="required text-danger" ><?php echo form_error("header_logo") ?></span>
                    </div>
                </div>
             
                <div class="control-group">

                    <label class="control-label" for="header_home"> Home</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge " value="<?php echo set_value('header_home', $header_home); ?>" id="header_home" name="header_home" placeholder="e.g Enter your  text ..">
                        <span class="required text-danger"><?php echo form_error("header_home") ?></span>

                    </div>

                </div>

                <div class="control-group">

                    <label class="control-label" for="header_features">Features</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge " value="<?php echo set_value('header_features', $header_features); ?>" id="header_features" name="header_features" placeholder="e.g Enter your text ..">
                        <span class="required text-danger"><?php echo form_error("header_features") ?></span>

                    </div>

                </div>
                <div class="control-group">

                    <label class="control-label" for="header_pages">Pages</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge " value="<?php echo set_value('header_pages', $header_pages); ?>" id="header_pages" name="header_pages" placeholder="e.g Enter your text..">
                        <span class="required text-danger"><?php echo form_error("header_pages") ?></span>

                    </div>

                </div>
                <div class="control-group">

                    <label class="control-label" for="header_portfolio">Portfolio</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge " value="<?php echo set_value('header_portfolio', $header_portfolio); ?>" id="header_portfolio" name="header_portfolio" placeholder="e.g Enter your text..">
                        <span class="required text-danger"><?php echo form_error("header_portfolio") ?></span>

                    </div>

                </div>
                <div class="control-group">

                    <label class="control-label" for="header_blog">Blog</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge " value="<?php echo set_value('header_blog', $header_blog); ?>" id="header_blog" name="header_blog" placeholder="e.g Enter your text..">
                        <span class="required text-danger"><?php echo form_error("header_blog") ?></span>

                    </div>

                </div>
                <div class="control-group">

                    <label class="control-label" for="header_contact">Contact</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge " value="<?php echo set_value('header_contact', $header_contact); ?>" id="header_contact" name="header_contact" placeholder="e.g Enter your text..">
                        <span class="required text-danger"><?php echo form_error("header_contact") ?></span>

                    </div>

                </div>
             

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="reset" class="btn">Cancel</button>
                </div>
            </fieldset>
        </form>

    </div>