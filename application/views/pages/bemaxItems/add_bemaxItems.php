<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a>
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#">Add Bemaxitems</a></li>
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
					<label class="control-label" for="bemaxitems_heading"> Main Heading</label>
					<div class="controls ">
						<input type="text" class="input-xlarge " value="<?php echo set_value('bemaxitems_heading',$bemaxitems_heading);?>" id="bemaxitems_heading" name="bemaxitems_heading" placeholder="e.g Enter your main heading">
                        <span class="required text-danger" ><?php echo form_error("bemaxitems_heading")?></span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="bemaxitems_icon">Icon</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo set_value('bemaxitems_icon',$bemaxitems_icon);?>" id="bemaxitems_icon" name="bemaxitems_icon" placeholder="e.g Enter your icon code...">
                        <span class="required text-danger" ><?php echo form_error("bemaxitems_icon")?></span>
					</div>
				</div>


				<div class="control-group">

					<label class="control-label" for="bemaxitems_sub_heading">Sub Heading</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo set_value('bemaxitems_sub_heading',$bemaxitems_sub_heading);?>" id="bemaxitems_sub_heading" name="bemaxitems_sub_heading" placeholder="e.g Enter your  sub heading..">
                        <span class="required text-danger" ><?php echo form_error("bemaxitems_sub_heading")?></span>

					</div>

				</div>
				<div class="control-group">

					<label class="control-label" for="bemaxitems_text">Content</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo set_value('bemaxitems_text',$bemaxitems_text);?>" id="bemaxitems_text" name="bemaxitems_text" placeholder="e.g Enter your text here..">
                        <span class="required text-danger" ><?php echo form_error("bemaxitems_text")?></span>

					</div>

				</div>
				
				<div class="form-actions">
					<button type="submit" class="btn btn-primary">Save changes</button>
					<button type="reset" class="btn">Cancel</button>
				</div>
			</fieldset>
		</form>

	</div>