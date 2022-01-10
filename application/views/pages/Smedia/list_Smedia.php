

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Meadia List</a></li>
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
                <th>Fb Icon </th>
                <th>Tw Icon</th>
                <th>Go Icon</th>
                <th>Ld Icon</th>
               
                <th>Action</th>

            </tr>
        </thead>

        <tbody>

            <?php foreach ($all_media_info as $valu) {   ?>

                <tr>

                    <td><?php echo $valu['smedia_fbicon']; ?></td>
                    <td><?php echo $valu['smedia_twicon']; ?></td>
                    <td><?php echo $valu['smedia_goicon']; ?></td>
                    <td><?php echo $valu['smedia_ldicon']; ?></td>
                    

                    <td>
                        <a href="<?php echo base_url(); ?>mediaEdit/<?php echo $valu['smedia_id'] ?>" class="btn btn-info">
                            <i class="halflings-icon white edit"></i>
                        </a>
                        <a href="<?php echo base_url(); ?>meadiaDelete/<?php echo $valu['smedia_id'] ?>" class="btn btn-danger" id="delete" Onclick="return ConfirmDelete();">
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