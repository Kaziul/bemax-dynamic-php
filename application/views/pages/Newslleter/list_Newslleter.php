

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Newslletter List</a></li>
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
             
                <th>Action</th>

            </tr>
        </thead>

        <tbody>

            <?php foreach ($all_newslleter_info as $valu) {   ?>

                <tr>

                    <td><?php echo $valu['newslleter_heading']; ?></td>
                    <td><?php echo $valu['newslleter_text']; ?></td>
                    <td><?php echo $valu['newslleter_btnText']; ?></td>
               

                    <td>
                        <a href="<?php echo base_url(); ?>newslleterEdit/<?php echo $valu['newslleter_id'] ?>" class="btn btn-info">
                            <i class="halflings-icon white edit"></i>
                        </a>
                        <a href="<?php echo base_url(); ?>newslleterDelete/<?php echo $valu['newslleter_id'] ?>" class="btn btn-danger" id="delete" Onclick="return ConfirmDelete();">
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