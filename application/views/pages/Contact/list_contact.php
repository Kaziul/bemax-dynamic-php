

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Contact List</a></li>
</ul>
<div class="box-content">
    <?php

    $messeage = $this->session->userdata('messeage');
    if ($messeage) {
        echo  "<span class='alert alert-danger'>$messeage</span>";
        $this->session->unset_userdata('messeage');
    }
    ?>
    </p><br>


    <table class="table table-striped table-bordered bootstap-datatable datatable">
        <thead>
            <tr>
                <th>Heading </th>
                <th>Image</th>
                <th>Image Link</th>
                <th>Icon</th>
                <th>Sub Heading</th>
              
            
                <th>Action</th>

            </tr>
        </thead>

        <tbody>

            <?php foreach ($all_contact_info as $valu) {   ?>

                <tr>

                    <td><?php echo $valu['contact_heading']; ?></td>
                    <td><?php echo $valu['contact_adds']; ?></td>
                    <td><?php echo $valu['contact_phone']; ?></td>
                    <td><?php echo $valu['contact_fax']; ?></td>
                    <td><?php echo $valu['contact_email']; ?></td>
             

                    <td>
                        <a href="<?php echo base_url(); ?>contactEdit/<?php echo $valu['contact_id'] ?>" class="btn btn-info">
                            <i class="halflings-icon white edit"></i>
                        </a>
                        <a href="<?php echo base_url(); ?>contactDelete/<?php echo $valu['contact_id'] ?>" class="btn btn-danger" id="delete" Onclick="return ConfirmDelete();">
                            <i class="halflings-icon white trash"></i>
                        </a>

                    </td>
                <?php    }
                ?>

                <script>
                    function ConfirmDelete() {
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