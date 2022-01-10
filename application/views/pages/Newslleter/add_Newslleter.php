<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Add Newslleter Form</a></li>
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
                    <label class="control-label" for="newslleter_heading">N Heading</label>
                    <div class="controls ">
                        <input type="text" class="input-xlarge " value="<?php echo set_value('newslleter_heading',$newslleter_heading); ?>" id="newslleter_heading" name="newslleter_heading" placeholder="e.g Enter your main heading..">
                        <span class="required text-danger"><?php echo form_error("newslleter_heading") ?></span>
                    </div>
                </div>
            
                <div class="control-group">

                    <label class="control-label" for="newslleter_btnText">N Text</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge " value="<?php echo set_value('newslleter_btnText',$newslleter_btnText); ?>" id="newslleter_btnText" name="newslleter_btnText" placeholder="e.g Enter your nl text..">
                        <span class="required text-danger"><?php echo form_error("newslleter_btnText") ?></span>

                    </div>

                </div>
                <div class="control-group">

                    <label class="control-label" for="newslleter_text">N Text</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge " value="<?php echo set_value('newslleter_text',$newslleter_text); ?>" id="newslleter_text" name="newslleter_text" placeholder="e.g Enter your nl text..">
                        <span class="required text-danger"><?php echo form_error("newslleter_text") ?></span>

                    </div>

                </div>

               

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="reset" class="btn">Cancel</button>
                </div>
            </fieldset>
        </form>

    </div>