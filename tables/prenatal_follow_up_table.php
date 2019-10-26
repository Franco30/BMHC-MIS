<?php
require '../require/config.php';
if(isset($_POST['show'])){
?>
<table id="followuptable" class="table datatable hover">
    <thead>
        <tr class="warning">
            <th>
                <center>Patient ID</center>
            </th>
            <th>
                <center>Patient Name</center>
            </th>
            <th>
                <center>Address</center>
            </th>
            <th>
                <center>Follow-up Date</center>
            </th>
            <th>
                <center>Remarks</center>
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
                $query = $conn->query("SELECT * FROM `prenatal_follow_up` NATURAL JOIN `patient` WHERE `prenatal_follow_up`.`patient_id` = `patient`.`patient_id` ORDER BY `follow_up_id` DESC") or die(mysqli_error());
                while($fetch = $query->fetch_array()){
		?>
        <tr>
            <td>
                <center><strong><?php echo $fetch['year']?><?php echo "0".$fetch['patient_id']?></strong></center>
            </td>
            <td>
                <center><strong><?php echo $fetch['patient_name']?></strong></center>
            </td>
            <td>
                <center><?php echo $fetch['purok']." ".$fetch['street_address']?></center>
            </td>
            <td>
                <center><?php echo $fetch['follow_up_date_time']?></center>
            </td>
            <td>
                <center><?php echo $fetch['remarks']?></center>
            </td>
            <td>
                <center>
                <?php if ($fetch['follow_up_status'] == 'Pending')echo "<span class='badge badge-danger animated infinite pulse' style='animation-duration:.8s;'>Pending</span>";
				if ($fetch['follow_up_status'] == 'Done')
                echo "<span class='badge badge-info'>Done</span>"
				?></center>
            </td>
            <td>
                <center><button class="btn btn-sm btn-info" data-toggle="modal" data-target="#edit_follow_up<?php echo $fetch['patient_id'];?>">UPDATE</button></center>
            </td>
            <?php //require('../modals/edit_prenatal_follow_up.php'); ?>
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
