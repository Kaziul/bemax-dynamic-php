<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a>
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#">Iconbox Input</a></li>
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
		<form class="form-horizontal" action="<?php base_url() ?>Iconbox/save_iconbox" method="POST" enctype="multipart/form-data">
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
					<label class="control-label" for="iconbox_img">IconBox Image</label>
					<div class="controls">
						<input type="file" name="iconbox_img" class="input-file uniform_on" id="iconbox_img">
					</div>
				</div>
				
				<div class="control-group">

					<label class="control-label" for="iconbox_icon">IconBox Icon</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="" id="iconbox_icon" name="iconbox_icon" placeholder="e.g Enter your  button text..">

					</div>

				</div>
				<div class="control-group">

					<label class="control-label" for="iconbox_Htext">IconBox Heading</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="" id="iconbox_Htext" name="iconbox_Htext" placeholder="e.g Enter your  button text..">

					</div>

				</div>
				<div class="control-group">

					<label class="control-label" for="iconbox_Ptext">IconBox Text</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="" id="iconbox_Ptext" name="iconbox_Ptext" placeholder="e.g Enter your  button text..">

					</div>

				</div>
				<div class="control-group">

					<label class="control-label" for="iconbox_Picon">IconBox PIcon</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="" id="iconbox_Picon" name="iconbox_Picon" placeholder="e.g Enter your  button text..">

					</div>

				</div>
				<div class="control-group">

					<label class="control-label" for="iconbox_Ptxt">IconBox Text</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="" id="iconbox_Ptxt" name="iconbox_Ptxt" placeholder="e.g Enter your  button text..">

					</div>

				</div>


				<div class="form-actions">
					<button type="submit" class="btn btn-primary">Save changes</button>
					<button type="reset" class="btn">Cancel</button>
				</div>
			</fieldset>
		</form>

	</div>