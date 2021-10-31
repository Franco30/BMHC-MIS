<?php
require '../require/config.php';
if(isset($_POST['show']) && isset($_POST['c_id']) && isset($_POST['p_id'])){
    $p = $_POST['p_id'];
    $c = $_POST['c_id'];
?>
<div class="table-responsive">
<table id="prescriptiontable" class="table datatable">
        <thead>
            <tr class="warning">
                <th><center>Medicine Category</center></th>
                <th><center>Medication & Dosage</center></th>
                <th><center>6 <br> (AM)</center></th>
                <th><center>8 <br> (AM)</center></th>
                <th><center>12 <br> (NN)</center></th>
                <th><center>2 <br> (PM)</center></th>
                <th><center>4 <br> (PM)</center></th>
                <th><center>6 <br> (PM)</center></th>
                <th><center>8 <br> (PM)</center></th>
                <th><center>Quantity</center></th>
                <th><center>Recommendation</center></th>
            </tr>
        </thead>
            <tbody>
                <?php
$query = $conn->query("SELECT * FROM `consultation_prescription` WHERE `patient_id` = '$p' && `consultation_id` = '$c'") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
                <tr>
                    <td><center><strong><?php echo $fetch['medicine_category']?></strong></center></td>
                    <td><center><strong><?php echo $fetch['medname']?></strong></center></td>
                    <td style="font-weight: bold;"><center><?php echo $fetch['6am']?></center></td>
                    <td style="font-weight: bold;"><center><?php echo $fetch['8am']?></center></td>
                    <td style="font-weight: bold;"><center><?php echo $fetch['12nn']?></center></td>
                    <td style="font-weight: bold;"><center><?php echo $fetch['2pm']?></center></td>
                    <td style="font-weight: bold;"><center><?php echo $fetch['4pm']?></center></td>
                    <td style="font-weight: bold;"><center><?php echo $fetch['6pm']?></center></td>
                    <td style="font-weight: bold;"><center><?php echo $fetch['8pm']?></center></td>
                    <td><center><?php echo $fetch['qty']?></center></td>
                    <td><center><?php echo $fetch['recommendation']?></center></td>
<!--
                    <td class="print">
                        <center>
                            <button data-target="#edit_child_patient<?php //echo $fetch['child_id']; ?>" data-toggle="modal" class="btn btn-sm btn-default">Update</button>
                        </center>
                        <?php //require('../modals/editchildpatient.php'); ?>
                    </td>
-->
                </tr>
                <?php
                }
                $conn->close();
                    ?>
            </tbody>
            </table>
            </div>
            <?php
}
?>