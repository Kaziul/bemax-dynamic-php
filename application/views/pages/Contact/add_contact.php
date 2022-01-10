<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a>
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#">Add Contact Form</a></li>
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
					<label class="control-label" for="contact_heading"> Contact Heading</label>
					<div class="controls ">
						<input type="text" class="input-xlarge " value="<?php echo set_value('contact_heading',$contact_heading);?>" id="contact_heading" name="contact_heading" placeholder="e.g Enter your main heading..">
                        <span class="required text-danger" ><?php echo form_error("contact_heading")?></span>
					</div>
				</div>

				<div class="control-group">

					<label class="control-label" for="contact_adds"> Address</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo set_value('contact_adds',$contact_adds);?>" id="contact_adds" name="contact_adds" placeholder="e.g Enter your adds..">
                        <span class="required text-danger" ><?php echo form_error("contact_adds")?></span>

					</div>

				</div>
				<div class="control-group">

					<label class="control-label" for="contact_phone">Contact Phone</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo set_value('contact_phone',$contact_phone);?>" id="contact_phone" name="contact_phone" placeholder="e.g Enter your Phone no..">
                        <span class="required text-danger" ><?php echo form_error("contact_phone")?></span>

					</div>

				</div>
				<div class="control-group">

					<label class="control-label" for="contact_fax"> Fax</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo set_value('contact_fax',$contact_fax);?>" id="contact_fax" name="contact_fax" placeholder="e.g Enter your fax no..">
                        <span class="required text-danger" ><?php echo form_error("contact_fax")?></span>

					</div>

				</div>
				<div class="control-group">

					<label class="control-label" for="contact_email"> Sub Heading</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo set_value('contact_email',$contact_email);?>" id="contact_email" name="contact_email" placeholder="e.g Enter your email no ..">
                        <span class="required text-danger" ><?php echo form_error("contact_email")?></span>

					</div>

				</div>
				
				
				<div class="form-actions">
					<button type="submit" class="btn btn-primary">Save changes</button>
					<button type="reset" class="btn">Cancel</button>
				</div>
			</fieldset>
		</form>

	</div>