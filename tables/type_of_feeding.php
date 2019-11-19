<?php
require 'require/config.php';
?>
<div class="table-responsive">
<table id="typeoffeedingtable" class="table datatable">
    <thead>
        <tr class="warning">
            <th><center>EBF</center></th>
            <th><center>MF</center></th>
            <th><center>BFF</center></th>
            <th><center>Date</center></th>
        </tr>
    </thead>
    <tbody>
        <?php
    $query = $conn->query("select * from `type_of_feeding` WHERE `child_id` = '$_GET[child_id]' ORDER BY `type_of_feeding_id` ASC") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        ?>
        <tr>
            <td style="font-weight: bold;"><center><?php echo $fetch['ebf']?></center></td>
            <td style="font-weight: bold;"><center><?php echo $fetch['mf']?></center></td>
            <td style="font-weight: bold;"><center><?php echo $fetch['bff']?></center></td>
            <td><center><?php echo $fetch['tof_date']?></center></td>
        </tr>
        <?php
    }
    $conn->close();
        ?>
    </tbody>
</table>
</div>