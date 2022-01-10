<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a>
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#">Add Choose Us Form</a></li>
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
					<label class="control-label" for="chooseUs_heading"> Project Heading</label>
					<div class="controls ">
						<input type="text" class="input-xlarge " value="<?php echo set_value('chooseUs_heading',$chooseUs_heading);?>" id="chooseUs_heading" name="chooseUs_heading" placeholder="e.g Enter your main heading..">
                        <span class="required text-danger" ><?php echo form_error("chooseUs_heading")?></span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="chooseUs_img"> Project Image</label>
					<div class="controls">
					<?php 
						if(!empty($old_img)){ ?>
							<img style="width: 240px; height:120px;" src="<?php echo base_url('back-end/uploads/').$old_img;?>" alt=""><br>
					<?php	}
						?>
						<input type="file" class="input-xlarge " value="<?php echo set_value('chooseUs_img',$chooseUs_img);?>" id="chooseUs_img" name="chooseUs_img">
                        <span class="required text-danger" ><?php echo form_error("chooseUs_img")?></span>
					</div>
				</div>


				<div class="control-group">

					<label class="control-label" for="chooseUs_imglink"> Project Link</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo set_value('chooseUs_imglink',$chooseUs_imglink);?>" id="chooseUs_imglink" name="chooseUs_imglink" placeholder="e.g Enter your link..">
                        <span class="required text-danger" ><?php echo form_error("chooseUs_imglink")?></span>

					</div>

				</div>
				<div class="control-group">

					<label class="control-label" for="choseUs_vIcon"> Project VIcon</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo set_value('choseUs_vIcon',$choseUs_vIcon);?>" id="choseUs_vIcon" name="choseUs_vIcon" placeholder="e.g Enter your P icon..">
                        <span class="required text-danger" ><?php echo form_error("choseUs_vIcon")?></span>

					</div>

				</div>
				<div class="control-group">

					<label class="control-label" for="chooseUs_icon"> Project Icon</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo set_value('chooseUs_icon',$chooseUs_icon);?>" id="chooseUs_icon" name="chooseUs_icon" placeholder="e.g Enter your Icon Code..">
                        <span class="required text-danger" ><?php echo form_error("chooseUs_icon")?></span>

					</div>

				</div>
				<div class="control-group">

					<label class="control-label" for="chooseUs_subHeading"> Sub Heading</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo set_value('chooseUs_subHeading',$chooseUs_subHeading);?>" id="chooseUs_subHeading" name="chooseUs_subHeading" placeholder="e.g Enter your sub heading ..">
                        <span class="required text-danger" ><?php echo form_error("chooseUs_subHeading")?></span>

					</div>

				</div>
				<div class="control-group">

					<label class="control-label" for="chooseUs_subHLink"> Sub Heading Link</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo set_value('chooseUs_subHLink',$chooseUs_subHLink);?>" id="chooseUs_subHLink" name="chooseUs_subHLink" placeholder="e.g Enter your sub heading link ..">
                        <span class="required text-danger" ><?php echo form_error("chooseUs_subHLink")?></span>

					</div>

				</div>
				<div class="control-group">

					<label class="control-label" for="chooseUs_text"> Project Text</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo set_value('chooseUs_text',$chooseUs_text);?>" id="chooseUs_text" name="chooseUs_text" placeholder="e.g Enter your project text ..">
                        <span class="required text-danger" ><?php echo form_error("chooseUs_text")?></span>

					</div>

				</div>
				
				<div class="form-actions">
					<button type="submit" class="btn btn-primary">Save changes</button>
					<button type="reset" class="btn">Cancel</button>
				</div>
			</fieldset>
		</form>

	</div>