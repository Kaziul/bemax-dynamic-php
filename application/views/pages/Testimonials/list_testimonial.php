

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Testimonials List</a></li>
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
                <th>Text</th>
                <th>M Name</th>
                <th>M Link</th>
                <!-- <th>Text</th> -->
                <th>Discr</th>
                <th>Action</th>

            </tr>
        </thead>

        <tbody>

            <?php foreach ($all_testiomonial_info as $valu) {   ?>

                <tr>

                    <td><?php echo $valu['testimonial_heading']; ?></td>
                    <td><?php echo $valu['testimonial_text']; ?></td>
                    <!-- <td><?php echo $valu['testimonial_img']; ?></td> -->
                    <td><?php echo $valu['testimonial_mname']; ?></td>
                    <td><?php echo $valu['testimonial_mlink']; ?></td>
                    <td><?php echo $valu['testimonial_discr']; ?></td>

                    <td>
                        <a href="<?php echo base_url(); ?>editTestimonial/<?php echo $valu['testimonial_id'] ?>" class="btn btn-info">
                            <i class="halflings-icon white edit"></i>
                        </a>
                        <a href="<?php echo base_url(); ?>deleteTestimonial/<?php echo $valu['testimonial_id'] ?>" class="btn btn-danger" id="delete" Onclick="return ConfirmDelete();">
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