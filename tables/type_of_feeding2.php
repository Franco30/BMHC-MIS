<?php
require 'require/config.php';
?>
<div class="table-responsive">
<table id="typeoffeeding2table" class="table datatable">
    <thead>
        <tr class="warning">
            <th><center>VIT A.</center></th>
            <th><center>6 Mos.</center></th>
            <th><center>1 yr.</center></th>
            <th><center>NBS</center></th>
            <th><center>VIT K.</center></th>
            <th><center>Action</center></th>
        </tr>
    </thead>
    <tbody>
        <?php
    $query2 = $conn->query("SELECT * FROM `type_of_feeding_2` WHERE `child_id` = '$_GET[child_id]' order by `child_id` DESC") or die(mysqli_error());
    while($fetch2 = $query2->fetch_array()){
        ?>
        <tr>
            <td><center><?php echo $fetch2['vit_a']?></center></td>
            <td><center><?php echo $fetch2['6_months']?></center></td>
            <td><center><?php echo $fetch2['1_year']?></center></td>
            <td><center><?php echo $fetch2['nbs']?></center></td>
            <td><center><?php echo $fetch2['vit_k']?></center></td>
            <td><center>
                    <button type="button" data-target="#edit_feeding2<?php echo $fetch2['type_of_feeding_2_id']; ?>" data-toggle="modal" class="btn btn-sm btn-info"> UPDATE</button>
                </center>
                <?php require('modals/edit_feeding2.php'); ?>
            </td>
        </tr>
        <?php
    }
    $conn->close();
        ?>
    </tbody>
</table>
</div>