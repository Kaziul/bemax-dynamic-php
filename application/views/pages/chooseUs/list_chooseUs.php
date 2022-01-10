

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Latest ChooseUs List</a></li>
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
                <!-- <th>Image Link</th> -->
                <th>Icon</th>
                <th>Sub Heading</th>
                <!-- <th>Sublink</th> -->
                <!-- <th>Text</th> -->
                <th>Action</th>

            </tr>
        </thead>

        <tbody>

            <?php foreach ($all_chooseUs_info as $valu) {   ?>

                <tr>

                    <td><?php echo $valu['chooseUs_heading']; ?></td>
                    <td><img style="border-radius: 50%; width: 50px; height: 50px;" src="<?php echo base_url('back-end/uploads/') .$valu['chooseUs_img']; ?>" alt=""></td>
                    <!-- <td><?php echo $valu['chooseUs_imglink']; ?></td> -->
                    <td><?php echo $valu['chooseUs_icon']; ?></td>
                    <td><?php echo $valu['chooseUs_subHeading']; ?></td>
                    <!-- <td><?php echo $valu['chooseUs_subHLink']; ?></td> -->
                    <!-- <td><?php echo $valu['chooseUs_text']; ?></td> -->

                    <td>
                        <a href="<?php echo base_url(); ?>editCH/<?php echo $valu['chooseUs_id'] ?>" class="btn btn-info">
                            <i class="halflings-icon white edit"></i>
                        </a>
                        <a href="<?php echo base_url(); ?>deleteCH/<?php echo $valu['chooseUs_id'] ?>" class="btn btn-danger" id="delete" Onclick="return ConfirmDelete();">
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