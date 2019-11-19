<?php
require '../require/config.php';
if(isset($_POST['show'])){
?>
<table id="childpatientmasterfiletable" class="table datatable" width="100%">
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
    $query = $conn->query("SELECT * FROM `patient_child`") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        ?>
        <tr>
            <td><center><strong><?php echo $fetch['year']?><?php echo "0".$fetch['child_id']?></strong></center></td>
            <td><center><strong><?php echo $fetch['child_name']?></strong></center></td>
            <td><center><?php echo $fetch['year']?></center></td>
            <td class="print"><center>
                <button data-target="#edit_child_patient<?php echo $fetch['child_id']; ?>" data-toggle="modal" class="btn btn-sm btn-default">Update</button>
                <a href="patient_overview_child?child_id=<?php echo $fetch['child_id']?>" class="btn btn-sm btn-info">Overview</a>
                </center>
                <?php require('../modals/editchildpatient.php'); ?>
            </td>
        </tr>
        <?php
    }
    $conn->close();
        ?>
    </tbody>
</table>
<?php
}
?>