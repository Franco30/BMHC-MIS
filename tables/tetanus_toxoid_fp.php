<?php
require 'require/config.php';
?>
<div class="table-responsive">
<table id="tetanustoxoidtable" class="table datatable">
    <thead>
        <tr class="warning">
            <th><center>IUD</center></th>
            <th><center>BTL</center></th>
            <th><center>1 yr.</center></th>
            <th><center>VIT A</center></th>
            <th><center>FeSO4</center></th>
            <th><center>Action</center></th>
        </tr>
    </thead>
    <tbody>
        <?php
    $query = $conn->query("SELECT * FROM `tetanus_toxoid_fp` WHERE `child_id` = '$_GET[child_id]' order by `child_id` DESC") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        
        ?>
        <tr>
            <td><center><?php echo $fetch['uid']?></center></td>
            <td><center><?php echo $fetch['btl']?></center></td>
            <td><center><?php echo $fetch['1_year']?></center></td>
            <td><center><?php echo $fetch['vit_a']?></center></td>
            <td><center><?php echo $fetch['feso4']?></center></td>
            <td><center>
                    <button type="button" data-target="#edit_tt_fp<?php echo $fetch['tetanus_toxoid_fp_id'];?>" data-toggle="modal" class="btn btn-sm btn-info"> UPDATE</button>
                </center>
                <?php require('modals/edit_tt_fp.php'); ?>
            </td>
        </tr>
        <?php
    }
    $conn->close();
        ?>
    </tbody>
</table>
</div>
<?php

?>