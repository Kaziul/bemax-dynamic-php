<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a>
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#">Add Blog Form</a></li>
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
					<label class="control-label" for="blog_heading"> Blog Heading</label>
					<div class="controls ">
						<input type="text" class="input-xlarge " value="<?php echo set_value('blog_heading',$blog_heading);?>" id="blog_heading" name="blog_heading" placeholder="e.g Enter your main heading..">
                        <span class="required text-danger" ><?php echo form_error("blog_heading")?></span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="blog_img"> Image</label>
					<div class="controls">
					<?php 
						if(!empty($old_img)){ ?>
							<img style="width: 240px; height:120px;" src="<?php echo base_url('back-end/uploads/').$old_img;?>" alt=""><br>
					<?php	}
						?>
						<input type="file" class="input-xlarge " value="<?php // echo set_value('blog_img',$blog_img);?>" id="blog_img" name="blog_img">
                        <!-- <span class="required text-danger" ><?php echo form_error("blog_img")?></span> -->
						
					</div>
				</div>


			
				<div class="control-group">

					<label class="control-label" for="blog_date"> Blog Date</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo set_value('blog_date',$blog_date);?>" id="blog_date" name="blog_date" placeholder="e.g Enter your date..">
                        <span class="required text-danger" ><?php echo form_error("blog_date")?></span>

					</div>

				</div>
				<div class="control-group">

					<label class="control-label" for="blog_subHeading"> Sub Heading</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo set_value('blog_subHeading',$blog_subHeading);?>" id="blog_subHeading" name="blog_subHeading" placeholder="e.g Enter your sub heading ..">
                        <span class="required text-danger" ><?php echo form_error("blog_subHeading")?></span>

					</div>

				</div>
				<div class="control-group">

					<label class="control-label" for="blog_text"> Blog Text</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo set_value('blog_text',$blog_text);?>" id="blog_text" name="blog_text" placeholder="e.g Enter your blog text ..">
                        <span class="required text-danger" ><?php echo form_error("blog_text")?></span>

					</div>

				</div>
				<div class="control-group">

					<label class="control-label" for="blog_devLink"> Develop Link</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo set_value('blog_devLink',$blog_devLink);?>" id="blog_devLink" name="blog_devLink" placeholder="e.g Enter your dev link ..">
                        <span class="required text-danger" ><?php echo form_error("blog_devLink")?></span>

					</div>

				</div>
				<div class="control-group">

					<label class="control-label" for="blog_devIcon	"> Develop Icon</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo set_value('blog_devIcon',$blog_devIcon	);?>" id="blog_devIcon" name="blog_devIcon" placeholder="e.g Enter your dev Icon ..">
                        <span class="required text-danger" ><?php echo form_error("blog_devIcon	")?></span>

					</div>

				</div>
				<div class="control-group">

					<label class="control-label" for="blog_develop"> Blog Develop</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo set_value('blog_develop',$blog_develop);?>" id="blog_develop" name="blog_develop" placeholder="e.g Enter your develop text ..">
                        <span class="required text-danger" ><?php echo form_error("blog_develop")?></span>

					</div>

				</div>
				<div class="control-group">

					<label class="control-label" for="blog_marLink"> Mark Link</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo set_value('blog_marLink',$blog_marLink);?>" id="blog_marLink" name="blog_marLink" placeholder="e.g Enter your blog mark link ..">
                        <span class="required text-danger" ><?php echo form_error("blog_marLink")?></span>

					</div>

				</div>
				<div class="control-group">

					<label class="control-label" for="blog_mark"> Mark Text</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo set_value('blog_mark',$blog_mark);?>" id="blog_mark" name="blog_mark" placeholder="e.g Enter your mark text ..">
                        <span class="required text-danger" ><?php echo form_error("blog_mark")?></span>

					</div>

				</div>
				<div class="control-group">

					<label class="control-label" for="blog_rmoreLink"> Read MoreLink</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo set_value('blog_rmoreLink',$blog_rmoreLink);?>" id="blog_rmoreLink" name="blog_rmoreLink" placeholder="e.g Enter your read more link ..">
                        <span class="required text-danger" ><?php echo form_error("blog_rmoreLink")?></span>

					</div>

				</div>
				<div class="control-group">

					<label class="control-label" for="blog_rmoreIcon"> Read MoreIcon</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo set_value('blog_rmoreIcon',$blog_rmoreIcon);?>" id="blog_rmoreIcon" name="blog_rmoreIcon" placeholder="e.g Enter your read more icon ..">
                        <span class="required text-danger" ><?php echo form_error("blog_rmoreIcon")?></span>

					</div>

				</div>
				<div class="control-group">

					<label class="control-label" for="blog_rmore"> Read MoreText</label>
					<div class="controls">
						<input type="text" class="input-xlarge " value="<?php echo set_value('blog_rmore',$blog_rmore);?>" id="blog_rmore" name="blog_rmore" placeholder="e.g Enter your read more text ..">
                        <span class="required text-danger" ><?php echo form_error("blog_rmore")?></span>

					</div>

				</div>
				
				<div class="form-actions">
					<button type="submit" class="btn btn-primary">Save changes</button>
					<button type="reset" class="btn">Cancel</button> 
				</div>
			</fieldset>
		</form>

	</div>