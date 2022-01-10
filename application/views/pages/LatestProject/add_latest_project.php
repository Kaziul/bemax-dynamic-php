<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a>
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#">Add Latest Project</a></li>
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
					<label class="control-label" for="latestProject_heading"> Project Heading</label>
					<div class="controls ">
						<input type="text" class="input-xlarge " value="<?php echo set_value('latestProject_heading', $latestProject_heading); ?>" id="latestProject_heading" name="latestProject_heading" placeholder="e.g Enter your main heading..">
						<span class="required text-danger"><?php echo form_error("latestProject_heading") ?></span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="latestProject_img"> Project Image</label>
					<div class="controls">
						<?php
						if (!empty($old_img)) { ?>
							<img style="width: 240px; height:120px;" src="<?php echo base_url('back-end/uploads/') . $old_img; ?>" alt=""><br>
						<?php	}
						?>
						<input type="file" class="input-xlarge " value="<?php echo set_value('latestProject_img', $latestProject_img); ?>" id="latestProject_img" name="latestProject_img">
						<span class="required text-danger"><?php echo form_error("latestProject_img") ?></span>
					</div>
				</div>


				<div class="control-group">

					<label class="control-label" for="latestProject_subHeading"> Project Sub-heading</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo set_value('latestProject_subHeading', $latestProject_subHeading); ?>" id="latestProject_subHeading" name="latestProject_subHeading" placeholder="e.g Enter your  sub heading..">
						<span class="required text-danger"><?php echo form_error("latestProject_subHeading") ?></span>

					</div>

				</div>
				<div class="control-group">

					<label class="control-label" for="latestProject_link"> Project Link</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo set_value('latestProject_link', $latestProject_link); ?>" id="latestProject_link" name="latestProject_link" placeholder="e.g Enter your project link..">
						<span class="required text-danger"><?php echo form_error("latestProject_link") ?></span>

					</div>

				</div>
				<div class="control-group">

					<label class="control-label" for="latestProject_text"> Project Text</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo set_value('latestProject_text', $latestProject_text); ?>" id="latestProject_text" name="latestProject_text" placeholder="e.g Enter your project text ..">
						<span class="required text-danger"><?php echo form_error("latestProject_text") ?></span>

					</div>

				</div>

				<div class="form-actions">
					<button type="submit" class="btn btn-primary">Save changes</button>
					<button type="reset" class="btn">Cancel</button>
				</div>
			</fieldset>
		</form>

	</div>