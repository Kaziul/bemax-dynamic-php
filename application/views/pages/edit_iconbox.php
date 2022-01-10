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
		<form class="form-horizontal" action="<?php echo base_url() ?>Iconbox/update_iconbox" method="POST">
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
<?php // print("<pre>".print_r($iconbox_info_by_id,true)."</pre>"); exit; ?>
				<!-- <div class="control-group">
					<label class="control-label" for="iconbox_img">IconBox Image</label>
					<div class="controls">
						<input type="file" name="iconbox_img" class="input-file uniform_on" id="iconbox_img">
					</div>
				</div> -->

				<div class="control-group">
					<!-- <label class="control-label" for="slider_id">Name</label> -->
					<div class="controls">
						<input type="hidden" class="input-xlarge " value="<?php echo $iconbox_info_by_id->iconbox_id; ?>" name="iconbox_id">
					</div>
				</div>
				
				<div class="control-group">

					<label class="control-label" for="iconbox_icon">IconBox Icon</label>
					<div class="controls">
						<input type="text" class="input-xlarge "  name="iconbox_icon" value="<?php echo $iconbox_info_by_id->iconbox_icon;?>">

					</div>

				</div>
				<div class="control-group">

					<label class="control-label" for="iconbox_Htext">IconBox Heading</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo $iconbox_info_by_id->iconbox_Htext;?>" id="iconbox_Htext" name="iconbox_Htext">

					</div>

				</div>
				<div class="control-group">

					<label class="control-label" for="iconbox_Ptext">IconBox Text</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo $iconbox_info_by_id->iconbox_Ptext;?>" id="iconbox_Ptext" name="iconbox_Ptext" >

					</div>

				</div>
				<div class="control-group">

					<label class="control-label" for="iconbox_Picon">IconBox PIcon</label>
					<div class="controls">
						<input type="text" class="input-xlarge " name="iconbox_Picon" value="<?php echo $iconbox_info_by_id->iconbox_Picon;?>"   >

					</div>

				</div>
				<div class="control-group">

					<label class="control-label" for="iconbox_Ptxt">IconBox Text</label>
					<div class="controls">
						<input type="text" class="input-xlarge "  name="iconbox_Ptxt"  value="<?php echo $iconbox_info_by_id->iconbox_Ptxt;?>" >

					</div>

				</div>

				<div class="form-actions">
					<button type="submit" class="btn btn-primary" name="submit" value="submit">Save changes</button>
					<button type="reset" class="btn">Cancel</button>
				</div>
			</fieldset>
		</form>

	</div>