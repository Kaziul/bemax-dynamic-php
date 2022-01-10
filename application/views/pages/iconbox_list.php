<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Iconbox List</a></li>
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
            <th>Image</th>
            <th>Icon 1</th>
            <th>Heading</th>
            <!-- <th>Text 1</th> -->
            <th>Icon 2</th>
            <th>Text 2</th>
            <th>Action</th>
            
        </tr>
        </thead>

        <tbody>
    <?php 

    
    
    ?>
      <?php  foreach($iconbox_list_info as $valu) {   ?>

        <tr>
        
       

            <td><img src="<?php echo base_url($valu['iconbox_img'])?>" alt="Iconbox Image" style="border-radius: 50%; width: 50px; height: 50px;" > </td>
            <td class="iconSize"><i class="<?php echo $valu['iconbox_icon'];?>"></i></td>
            <td><?php echo $valu['iconbox_Htext']; ?></td>
            <!-- <td><?php echo $valu['iconbox_Ptext']; ?></td> -->
            <td class="iconSize"><i class="<?php echo $valu['iconbox_Picon'];?>"></i></td>
            <td><?php echo $valu['iconbox_Ptxt']; ?></td>
            
            <td>
                <a href="<?php echo base_url();?>iconboxEidt/<?php echo $valu['iconbox_id']?>" class="btn btn-info">
                    <i class="halflings-icon white edit"></i>
                </a>
                <a href="<?php echo base_url();?>iconboxDelete/<?php echo $valu['iconbox_id']?>" class="btn btn-danger" id="delete" Onclick="return ConfirmDelete();">
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