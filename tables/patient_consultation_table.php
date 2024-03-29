<?php require 'require/config.php'; ?>
<div class="table-responsive">
    <table id="patientmasterfiletable" class="table datatable" width="100%">
        <thead>
            <tr class="warning">
                <th><center>Consultation No</center></th>
                <th><center>Patient No</center></th>
                <th><center>Date</center></th>
                <th><center>Complaints</center></th>
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
    $q2 = $conn->query("SELECT * FROM `consultation` WHERE `patient_id` = '$_GET[patient_id]' && `status` = 'No Prescription'")or die(mysqli_error());
    $f2 = $q2->fetch_array();
    ?>
            <tr>
                <td><center><strong><?php echo $fetch['year']?><?php echo "0".$fetch['consultation_id']?></strong></center></td>
                <td><center><strong><?php echo $f['year']?><?php echo "0".$fetch['patient_id']?></strong></center>
                </td>
                <td><center><strong><?php echo $fetch['consultation_date']?></strong></center></td>
                <td><?php echo $fetch['complaints']?></td>
                <td class="print">
                    <center>
                        <?php if($fetch['status'] == 'No Prescription') { ?>
                        <a href="consultation_treatment?patient_id=<?php echo $fetch['patient_id']?>&&consultation_id=<?php echo $f2['consultation_id'] ?>" class="btn btn-md btn-danger"><span class="fa fa-medkit animated infinite pulse"></span> Prescription</a>
                        <?php } else { ?>
<!--                        <a href="#" class="btn btn-md btn-default"><span class="fa fa-medkit"></span></a>-->
                        <a href="consultation_treatment?patient_id=<?php echo $fetch['patient_id']?>&&consultation_id=<?php echo $fetch['consultation_id'] ?>" class="btn btn-md btn-default" data-toggle="tooltip" data-placement="top" title="Prescription"><span class="fa fa-medkit" style="margin-right: 0px;"></span></a>
                        <a href="consultation_print?patient_id=<?php echo $fetch['patient_id']?>&&consultation_id=<?php echo $fetch['consultation_id']?>" class="btn btn-md btn-success" data-toggle="tooltip" data-placement="top" title="Preview"><span class="glyphicon glyphicon-print" style="margin-right: 0px;"></span></a> <?php } ?>
                        
                        <a href="edit_consultation?consultation_id=<?php echo $fetch['consultation_id'] ?>&&patient_id=<?php echo $fetch['patient_id'] ?>" class="btn btn-md btn-info">Edit</a>
                    </center>
                </td>
            </tr>
            <?php
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</div>
