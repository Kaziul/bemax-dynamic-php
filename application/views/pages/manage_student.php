<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Slider List</a></li>
			</ul>
<div class="box-content">
<?php 
								
								$messeage = $this->session->userdata('messeage');
								if($messeage){
									echo  "<span class='alert alert-danger'>$messeage</span>";
									$this->session->unset_userdata('messeage');
								}
								?>
			</p><br>

<table class="table table-striped table-bordered bootstap-datatable datatable">
        <thead>
        <tr>
            <th>Heading 1</th>
            <th>Heading 2</th>
            <th>Button Text</th>
            <th>Button Link</th>
            <th>Slider Image</th>
            <th>Action</th>
            
        </tr>
        </thead>

        <tbody>
    
      <?php  foreach($all_student_info as $valu) {   ?>

        <tr>

            <td><?php echo $valu['heading_sml']; ?></td>
            <td><?php echo $valu['heading_big']; ?></td>
            <td><?php echo $valu['btn_txt']; ?></td>
            <td><?php echo $valu['btn_link']; ?></td>
            <td><img style="border-radius: 50%; width: 50px; height: 50px;" src="<?php echo base_url()?>back-end/uploads/<?php echo ($valu['slider_image']) ; ?>" alt=""></td>
            
            <td>
                <a href="<?php echo base_url();?>editSlider/<?php echo $valu['slider_id']?>" class="btn btn-info">
                    <i class="halflings-icon white edit"></i>
                </a>
                <a href="<?php echo base_url();?>deleteSlider/<?php echo $valu['slider_id']?>" class="btn btn-danger" id="delete" Onclick="return ConfirmDelete();">
                    <i class="halflings-icon white trash"></i>
                </a>

            </td>
         <?php    }
        ?> 

        <script>
            function ConfirmDelete()
            {
            var x = confirm("Are you sure you want to delete?");
            if (x)
                return true;
            else
                return false;
            }
        </script>
    
        </tbody>
    </table>
	</div>