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
		<th><center>Action</center></th>
        </tr>
    </thead>
    <tbody>
        <?php
    $query = $conn->query("SELECT * FROM `patient_child` WHERE `status` = 'Registered'") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        ?>
        <tr>
            <td><center><?php echo $fetch['year']?><?php echo "0".$fetch['child_id']?></center></td>
            <td><center><?php echo $fetch['child_name']?></center></td>
            <td><center><?php echo $fetch['year']?></center></td>
            <td><center>
                <button data-target="#edit_patient<?php echo $fetch['child_id']; ?>" data-toggle="modal" class="btn btn-sm btn-default">Edit</button>
                <a href="patient_overview_child?id=<?php echo $fetch['child_id']?>&child_name=<?php echo $fetch['child_name']?>" class="btn btn-sm btn-info">View</a>
                </center>
                <?php require('../modals/editpatient.php'); ?>
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