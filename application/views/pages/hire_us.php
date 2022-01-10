<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a>
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#">HireUs Input</a></li>
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
		<form class="form-horizontal" action="<?php base_url() ?>" method="POST">
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
					<label class="control-label" for="side_txt">Heading 1<span style="color: red;">*</span></label>
					<div class="controls ">
						<input type="text" class="input-xlarge " value="<?php echo set_value('side_txt',$side_txt);?>" id="side_txt" name="side_txt" placeholder="e.g Enter your heading 1">
						<span class="required text-danger" ><?php echo form_error("side_txt") ?></span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="hireUs_btn_txt">Button Text</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo set_value('hireUs_btn_txt',$hireUs_btn_txt);?>" id="hireUs_btn_txt" name="hireUs_btn_txt" placeholder="Enter your text..">
						<span class="required text-danger" ><?php echo form_error("hireUs_btn_txt") ?></span>

					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="hireUs_btn_link">Button Link</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo set_value('hireUs_btn_link',$hireUs_btn_link);?>" id="hireUs_btn_link" name="hireUs_btn_link" placeholder="Enter your link..">
						<span class="required text-danger" ><?php echo form_error("hireUs_btn_link") ?></span>

					</div>
				</div>
				
			
				
					<div class="form-actions">
						<button type="submit" class="btn btn-primary">Save changes</button>
						<button type="reset" class="btn">Cancel</button>
					</div>
			</fieldset>
		</form>

	</div>