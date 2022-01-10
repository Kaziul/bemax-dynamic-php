

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Features List</a></li>
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
                <th>F Heading </th>
                <th>F Story</th>
                <th>F Condition</th>
                <th>F Policy</th>
                <th>F Map</th>
               
                <th>Action</th>

            </tr>
        </thead>

        <tbody>

            <?php foreach ($all_feature_info as $valu) {   ?>

                <tr>

                    <td><?php echo $valu['feature_heading']; ?></td>
                    <td><?php echo $valu['feature_story']; ?></td>
                    <td><?php echo $valu['feature_Conditon']; ?></td>
                    <td><?php echo $valu['feature_policy']; ?></td>
                    <td><?php echo $valu['feature_map']; ?></td>
                    

                    <td>
                        <a href="<?php echo base_url(); ?>featureEdit/<?php echo $valu['feature_id'] ?>" class="btn btn-info">
                            <i class="halflings-icon white edit"></i>
                        </a>
                        <a href="<?php echo base_url(); ?>featureDelete/<?php echo $valu['feature_id'] ?>" class="btn btn-danger" id="delete" Onclick="return ConfirmDelete();">
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