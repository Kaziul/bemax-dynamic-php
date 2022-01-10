<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a>
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#">Edit Student</a></li>
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
		<form class="form-horizontal" action="<?php echo base_url() ?>update-student" method="POST">
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
					<!-- <label class="control-label" for="slider_id">Name</label> -->
					<div class="controls">
						<input type="hidden" class="input-xlarge " value="<?php echo $all_student_info_by_id->slider_id; ?>" name="slider_id">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="heading_sml">Heading 1</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo $all_student_info_by_id->heading_sml; ?>" name="heading_sml">
					</div>
				</div>


				<div class="control-group">
					<label class="control-label" for="heading_big">Name</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo $all_student_info_by_id->heading_big; ?>" name="heading_big">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="btn_txt">Button Text</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo $all_student_info_by_id->btn_txt; ?>" name="btn_txt">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="btn_link">Button Link</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo $all_student_info_by_id->btn_link; ?>" name="btn_link">
					</div>
				</div>

				<!-- <div class="control-group">
					<label class="control-label" for="fileInput">File input</label>
					<div class="controls">
						<input type="file" name="slider_image" value="<?php echo $all_student_info_by_id->slider_image; ?>" class="input-file uniform_on" id="fileInput">
					</div>
				</div> -->

				<div class="form-actions">
					<button type="submit" class="btn btn-primary" name="submit" value="submit">Save changes</button>
					<button type="reset" class="btn">Cancel</button>
				</div>
			</fieldset>
		</form>

	</div>