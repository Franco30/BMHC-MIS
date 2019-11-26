<?php
require 'require/config.php';
?>
<div class="table-responsive">
<table id="immunizationconsultationtable" class="table datatable">
    <thead>
        <tr class="warning">
            <th><center>Date</center></th>
            <th><center>Complaints</center></th>
            <th><center>Diagnosis</center></th>
            <th><center>Plan of Action</center></th>
            <th><center>Remarks</center></th>
            <th><center>Action</center></th>
        </tr>
    </thead>
    <tbody>
        <?php
$query = $conn->query("SELECT * FROM `immunization`, `immunization_consultation` WHERE `immunization`.`child_id`= '$_GET[child_id]' && `immunization_consultation`.`immunization_id` = '$_GET[immunization_id]'") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        ?>
        <tr>
            <td><center><?php echo $fetch['date']?></center></td>
            <td><center><?php echo $fetch['complaints']?></center></td>
            <td><center><?php echo $fetch['diagnosis']?></center></td>
            <td><center><?php echo $fetch['plan_of_action']?></center></td>
            <td><center><?php echo $fetch['remarks']?></center></td>
            <td><center>
            <a href="immunization_treatment?child_id=<?php echo $fetch['child_id'];?>&&immunization_id=<?php echo $fetch['immunization_id']?>" class="btn btn-sm btn-info"> Overview</a>
            </center></td>
        </tr>
        <?php
    }
    $conn->close();
        ?>
    </tbody>
</table>
</div>