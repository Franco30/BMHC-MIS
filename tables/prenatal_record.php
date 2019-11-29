<?php require 'require/config.php'; ?>
<div class="table-responsive">
    <table id="patientprenataltable" class="table datatable" width="100%">
        <thead>
            <tr class="warning">
                <th><center>Doctor's Order and Advice</center></th>
                <th><center>Date</center></th>
                <th class="print"><center>Action</center></th>
            </tr>
        </thead>
        <tbody>
            <?php
require 'require/config.php';
$query = $conn->query("SELECT * FROM `prenatal_consultation` WHERE `prenatal_consultation`.`patient_id` =  '$_GET[patient_id]' && `prenatal_id` = '$_GET[prenatal_id]'") or die(mysqli_error());
while($fetch = $query->fetch_array()){
    $prenatal_id = $fetch['prenatal_id'];
    $id = $fetch['patient_id'];
    $q = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[patient_id]'") or die(mysqli_error());
    $f = $q->fetch_array();
    $q2 = $conn->query("SELECT * FROM `prenatal_consultation` WHERE `patient_id` = '$id' && `prenatal_id` = '$prenatal_id'") or die(mysqli_error());
    $f2 = $q2->fetch_array();
    ?>
            <tr>
                <td style="width:40%"><center><?php echo $fetch['doctors_order_advice']?></center></td>
                <td><center><?php echo $fetch['date']?></center></td>
                <td><center><a href="prenatal_overview?patient_id=<?php echo $f['patient_id'];?>&&prenatal_id=<?php echo $prenatal_id?>&&prenatal_consultation_id=<?php echo $fetch['prenatal_consultation_id'] ?>" class="btn btn-md btn-info">Overview</a></center></td>
            </tr>
            <?php
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</div>
