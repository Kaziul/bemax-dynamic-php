<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a>
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#">Add CTA</a></li>
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
					<label class="control-label" for="cta_heading">Heading</label>
					<div class="controls ">
						<input type="text" class="input-xlarge " value="<?php echo set_value('cta_heading',$cta_heading);?>" id="cta_heading" name="cta_heading" placeholder="e.g Enter your main heading..">
                        <span class="required text-danger" ><?php echo form_error("cta_heading")?></span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="cta_text">Cta Text</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo set_value('cta_text',$cta_text);?>" id="cta_text" name="cta_text" placeholder="e.g Enter your Cta Text..">
                        <span class="required text-danger" ><?php echo form_error("cta_text")?></span>
					</div>
				</div>


				<div class="control-group">

					<label class="control-label" for="cta_textLink"> Cta Link</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo set_value('cta_textLink',$cta_textLink);?>" id="cta_textLink" name="cta_textLink" placeholder="e.g Enter your  Cta Link..">
                        <span class="required text-danger" ><?php echo form_error("cta_textLink")?></span>

					</div>

				</div>
				<div class="control-group">

					<label class="control-label" for="cta_linkText">Link Text</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo set_value('cta_linkText',$cta_linkText);?>" id="cta_linkText" name="cta_linkText" placeholder="e.g Enter your Cta Link Text..">
                        <span class="required text-danger" ><?php echo form_error("cta_linkText")?></span>

					</div>

				</div>

				<div class="control-group">
					<label class="control-label" for="cta_img">File input</label>
					<div class="controls">
					<?php 
						if(!empty($old_img)){ ?>
							<img style="width: 240px; height:120px;" src="<?php echo base_url('back-end/uploads/').$old_img;?>" alt=""><br>
					<?php	}
						?>
						<input type="file" value="<?php echo set_value('cta_img',$cta_img)?>" name="cta_img" class="input-file uniform_on" id="cta_img">
						<span class="required text-danger" ><?php echo form_error("cta_img")?></span>
					</div>
				</div>
				
				<div class="form-actions">
					<button type="submit" class="btn btn-primary">Save changes</button>
					<button type="reset" class="btn">Cancel</button>
				</div>
			</fieldset>
		</form>

	</div>