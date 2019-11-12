<?php
require '../require/config.php';
if(isset($_POST['show'])){
?>
<div class="table-responsive">
    <table id="prescriptiontable" class="table datatable">
        <thead>
            <tr class="warning">
                <th>
                    <center>Medicine Category</center>
                </th>
                <th>
                    <center>Medication & Dosage</center>
                </th>
                <th>
                    <center>6 (AM)</center>
                </th>
                <th>
                    <center>8 (AM)</center>
                </th>
                <th>
                    <center>12 (NN)</center>
                </th>
                <th>
                    <center>2 (PM)</center>
                </th>
                <th>
                    <center>4 (PM)</center>
                </th>
                <th>
                    <center>6 (PM)</center>
                </th>
                <th>
                    <center>8 (PM)</center>
                </th>
                <th>
                    <center>Quantity</center>
                </th>
                <th>
                    <center>Recommendation</center>
                </th>
                <th>
                    <center>Action</center>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            require '../require/config.php';
            $query = $conn->query("SELECT * FROM `consultation_prescription` WHERE `patient_id` = '$_GET[patient_id]' && `consultation_id` = '$_GET[consultation_id]'") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
            ?>
            <tr>
                <td>
                    <center><strong><?php echo $fetch['medicine_category']?></strong></center>
                </td>
                <td>
                    <center><strong><?php echo $fetch['medname']?></strong></center>
                </td>
                <td>
                    <center><?php echo $fetch['6am']?></center>
                </td>
                <td>
                    <center><?php echo $fetch['8am']?></center>
                </td>
                <td>
                    <center><?php echo $fetch['12nn']?></center>
                </td>
                <td>
                    <center><?php echo $fetch['2pm']?></center>
                </td>
                <td>
                    <center><?php echo $fetch['4pm']?></center>
                </td>
                <td>
                    <center><?php echo $fetch['6pm']?></center>
                </td>
                <td>
                    <center><?php echo $fetch['8pm']?></center>
                </td>
                <td>
                    <center><?php echo $fetch['qty']?></center>
                </td>
                <td>
                    <center><?php echo $fetch['recommendation']?></center>
                </td>
                <td class="print">
                    <center>
                        <button data-target="#edit_child_patient<?php echo $fetch['child_id']; ?>" data-toggle="modal" class="btn btn-sm btn-default">Update</button>
                    </center>
                    <?php //require('../modals/editchildpatient.php'); ?>
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
}
?>
