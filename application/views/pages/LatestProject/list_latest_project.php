

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Latest Project List</a></li>
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
                <th>Sub-heading</th>
                <th>Link</th>
                <th>Text</th>
                <th>Action</th>

            </tr>
        </thead>

        <tbody>

            <?php foreach ($bemaxitems_list_from_db as $valu) {   ?>

                <tr>

                    <td><?php echo $valu['latestProject_heading']; ?></td>
                    <td><img style="border-radius: 50%; width: 50px; height: 50px;" src="<?php echo base_url('back-end/uploads/').$valu['latestProject_img']; ?>" alt=""></td>
                    <td><?php echo $valu['latestProject_subHeading']; ?></td>
                    <td><?php echo $valu['latestProject_link']; ?></td>
                    <td><?php echo $valu['latestProject_text']; ?></td>

                    <td>
                        <a href="<?php echo base_url(); ?>editProject/<?php echo $valu['latestProject_id'] ?>" class="btn btn-info">
                            <i class="halflings-icon white edit"></i>
                        </a>
                        <a href="<?php echo base_url(); ?>deleteLproject/<?php echo $valu['latestProject_id'] ?>" class="btn btn-danger" id="delete" Onclick="return ConfirmDelete();">
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