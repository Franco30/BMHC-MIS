<div class="table-responsive">
    <table id="consultationmasterfile" class="table table-hover table-bordered">
        <thead>
            <tr class="warning">
                <th><center>Date</center></th>
                <th><center>Complaints</center></th>
                <th><center>Pertinent P.E Findings</center></th>
                <th><center>Diagnosis</center></th>
                <th><center>Laboratory Request</center></th>
                <th class="print"><center>Action</center></th>
            </tr>
        </thead>
        <tbody>
            <?php
require 'require/config.php';
$query = $conn->query("SELECT * FROM `consultation` WHERE `consultation`.`patient_id` =  '$_GET[patient_id]'") or die(mysqli_error());
while($fetch = $query->fetch_array()){
$q = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[patient_id]'") or die(mysqli_error());
$f = $q->fetch_array();
?>
            <tr>
                <td><center><strong><?php echo $fetch['consultation_date']?></strong></center></td>
                <td><center><?php echo $fetch['complaints']?></center></td>
                <td><center><?php echo $fetch['pe_findings']?></center></td>
                <td><center><?php echo $fetch['diagnosis']?></center></td>
                <td><center><?php echo $fetch['lab_request']?></center></td>
                <td class="print"><center><a class="btn btn-default" href="consultation_overview?patient_id=<?php echo $f['patient_id'];?>&&consultation_id=<?php echo $fetch['consultation_id'];?>">Overview</a></center></td>
            </tr>
            <?php
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</div>
