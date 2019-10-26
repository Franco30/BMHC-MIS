<?php
require '../require/config.php';
if(isset($_POST['show'])){
?>
<div class="table-responsive">
    <table id="fpfollowuptable" class="table datatable hover">
        <thead>
            <tr class="warning">
                <th>
                    <center>Patient ID</center>
                </th>
                <th>
                    <center>Patient Name</center>
                </th>
                <th>
                    <center>Remarks</center>
                </th>
                <th>
                    <center>Next Service Date</center>
                </th>
                <th>
                    <center>Status</center>
                </th>
                <th>
                    <center>Actions</center>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
                require '../require/config.php';
                $query1 = $conn->query("SELECT * FROM `fp_follow_up` NATURAL JOIN `patient` WHERE `fp_follow_up`.`patient_id` = `patient`.`patient_id` ORDER BY `fp_follow_up_id` DESC") or die(mysqli_error());
                while($fetch1 = $query1->fetch_array()){
		?>
            <tr>
                <td>
                    <center><strong><?php echo $fetch1['year']?><?php echo "0".$fetch1['patient_id']?></strong></center>
                </td>
                <td>
                    <center><strong><?php echo $fetch1['patient_name']?></strong></center>
                </td>
                <td>
                    <center><?php echo $fetch1['remarks']?></center>
                </td>
                <td>
                    <center><?php echo $fetch1['next_service_date']?></center>
                </td>
                <td>
                    <center>
                        <?php if ($fetch1['follow_up_status'] == 'Pending')echo "<span class='badge badge-danger animated infinite pulse' style='animation-duration:.8s;'>Pending</span>";
				if ($fetch1['follow_up_status'] == 'Done')
                echo "<span class='badge badge-info'>Done</span>"
				?></center>
                </td>
                <td>
                    <center><button class="btn btn-sm btn-info" data-toggle="modal" data-target="#fp_follow_up<?php echo $fetch1['patient_id']; ?>">UPDATE</button></center>
                </td>
                <?php //require('../modals/edit_fp_follow_up.php'); ?>
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
