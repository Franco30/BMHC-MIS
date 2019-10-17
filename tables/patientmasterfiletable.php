<?php
require '../require/config.php';
if(isset($_POST['show'])){
?>
<div class="table-responsive">
<table id="patientmasterfiletable" class="table datatable" width="100%">
    <thead>
        <tr class="warning">
        <th><center>Patient No</center></th>
        <th><center>Patient Name</center></th>
		<th><center>Registration Date</center></th>
		<th class="print"><center>Action</center></th>
        </tr>
    </thead>
    <tbody>
        <?php
    $query = $conn->query("SELECT * FROM `patient` WHERE `status` = 'Registered'") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        ?>
        <tr>
            <td><center><?php echo $fetch['year']?><?php echo "0".$fetch['patient_id']?></center></td>
            <td><center><?php echo $fetch['patient_name']?></center></td>
            <td><center><?php echo $fetch['year']?></center></td>
            <td class="print"><center>
                <a href="edit_patient?id=<?php echo $fetch['patient_id']?>" class="btn btn-sm btn-default">Update</a>
                <a href="patient_overview?id=<?php echo $fetch['patient_id']?>&patient_name=<?php echo $fetch['patient_name']?>" class="btn btn-sm btn-info">Overview</a>
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
<?php
}
?>