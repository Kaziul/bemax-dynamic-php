<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Add Client Form</a></li>
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
                    <label class="control-label" for="client_img"> Image</label>
                    <div class="controls">

                    <?php 
						if(!empty($old_img)){ ?>
							<img style="width: 240px; height:120px;" src="<?php echo base_url('back-end/uploads/').$old_img;?>" alt=""><br>
					<?php	}
						?>
                        <input type="file" class="input-xlarge " value="<?php  echo set_value('client_img'); ?>" id="client_img" name="client_img" required >
                        <span class="required text-danger" ><?php echo form_error("client_img") ?></span>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="reset" class="btn">Cancel</button>
                </div>
            </fieldset>
        </form>

    </div>