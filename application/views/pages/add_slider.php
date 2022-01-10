<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a>
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#">Slider Input</a></li>
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
					<label class="control-label" for="heading_sml">Heading 1<span style="color: red;">*</span></label>
					<div class="controls ">
						<input type="text" class="input-xlarge " value="<?php echo set_value('heading_sml',$heading_sml);?>" id="heading_sml" name="heading_sml" placeholder="e.g Enter your heading 1">
						<span class="required text-danger" ><?php echo form_error("heading_sml") ?></span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="heading_big">Heading 2</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo set_value('heading_big',$heading_big);?>" id="heading_big" name="heading_big" placeholder="e.g Enter your heading 2">
						<span class="required text-danger" ><?php echo form_error("heading_big") ?></span>

					</div>
				</div>


				<div class="control-group">

					<label class="control-label" for="btn_txt">Button Text</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo set_value('btn_txt',$btn_txt);?>" id="btn_txt" name="btn_txt" placeholder="e.g Enter your  button text..">
						<span class="required text-danger" ><?php echo form_error("btn_txt") ?></span>


					</div>

				</div>
				<div class="control-group">

					<label class="control-label" for="btn_link">Button Link</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo set_value('btn_link',$btn_link);?>" id="btn_link" name="btn_link" placeholder="e.g Enter your  new link..">
						<span class="required text-danger" ><?php echo form_error("btn_link") ?></span>


					</div>

				</div>
				<div class="control-group">
					<label class="control-label" for="fileInput">File input</label>
					<div class="controls">
					<?php 
						if(!empty($old_image)){ ?>
							<img style="width: 240px; height:120px;" src="<?php echo base_url('back-end/uploads/').$old_image;?>" alt=""><br>
					<?php	}
						?>
						<input type="file" name="slider_image" class="input-file uniform_on" id="fileInput">
						
						
					</div>
				</div>
				<div class="form-actions">
					<button type="submit" class="btn btn-primary">Save changes</button>
					<button type="reset" class="btn">Cancel</button>
				</div>
			</fieldset>
		</form>

	</div>