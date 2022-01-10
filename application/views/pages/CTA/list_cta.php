

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">CTA List</a></li>
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
                <th>Cta Text</th>
                <th>Text Link</th>
                <th>Link Text</th>
                <th>Image</th>
                <th>Action</th>

            </tr>
        </thead>

        <tbody>
            <?php 
           // print("<pre>".print_r($all_cta_info,true)."</pre>"); exit;
            ?>

            <?php foreach ($all_cta_info as $valu) {   ?>

                <tr>

                    <td><?php echo $valu['cta_heading']; ?></td>
                    <td><?php echo $valu['cta_text']; ?></td>
                    <td><?php echo $valu['cta_textLink']; ?></td>
                    <td><?php echo $valu['cta_linkText']; ?></td>
                    <td><img style="border-radius: 50%; width: 50px; height: 50px;"  src="<?php echo base_url('back-end/uploads/') .$valu['cta_img']; ?>" alt=""></td>

                    <td>
                        <a href="<?php echo base_url(); ?>edit/<?php echo $valu['cta_id'] ?>" class="btn btn-info">
                            <i class="halflings-icon white edit"></i>
                        </a>
                        <a href="<?php echo base_url(); ?>delete/<?php echo $valu['cta_id'] ?>" class="btn btn-danger" id="delete" Onclick="return ConfirmDelete();">
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