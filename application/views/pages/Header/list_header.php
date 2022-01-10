

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Header List</a></li>
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
                <!-- <th>Logo</th> -->
                <th>Home</th>
                <th>Features</th>
                <th>Pages</th>
                <th>Portfolio</th>
                <th>Blog</th>
                <th>Contact</th>
               
                <th>Action</th>

            </tr>
        </thead>

        <tbody>

            <?php foreach ($all_header_info as $valu) {   ?>

                <tr>

                    <!-- <td><?php echo $valu['header_logo']; ?></td> -->
                    <td><?php echo $valu['header_home']; ?></td>
                    <td><?php echo $valu['header_features']; ?></td>
                    <td><?php echo $valu['header_pages']; ?></td>
                    <td><?php echo $valu['header_portfolio']; ?></td>
                    <td><?php echo $valu['header_blog']; ?></td>
                    <td><?php echo $valu['header_contact']; ?></td>
                    

                    <td>
                        <a href="<?php echo base_url(); ?>headerEdit/<?php echo $valu['header_id'] ?>" class="btn btn-info">
                            <i class="halflings-icon white edit"></i>
                        </a>
                        <a href="<?php echo base_url(); ?>headerDelete/<?php echo $valu['header_id'] ?>" class="btn btn-danger" id="delete" Onclick="return ConfirmDelete();">
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