

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Blog List</a></li>
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
                <th>Date</th>
                <th>Sub Heading</th>
                <th>Develop Icon</th>
                <th>Mark Link</th>
                <th>Action</th>

            </tr>
        </thead>

        <tbody>

            <?php foreach ($all_blog_info as $valu) {   ?>

                <tr>

                    <td><?php echo $valu['blog_heading']; ?></td>
                    <td><?php echo $valu['blog_date']; ?></td>
                    <td><?php echo $valu['blog_subHeading']; ?></td>
                    <td><?php echo $valu['blog_devIcon']; ?></td>
                    <td><?php echo $valu['blog_marLink']; ?></td>
                    

                    <td>
                        <a href="<?php echo base_url(); ?>editBlog/<?php echo $valu['blog_id'] ?>" class="btn btn-info">
                            <i class="halflings-icon white edit"></i>
                        </a>
                        <a href="<?php echo base_url(); ?>deleteBlog/<?php echo $valu['blog_id'] ?>" class="btn btn-danger" id="delete" Onclick="return ConfirmDelete();">
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