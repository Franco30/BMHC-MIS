<?php
require '../require/config.php';
if(isset($_POST['show'])){
?>
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
                <center>Address</center>
            </th>
            <th>
                <center>Contact No.</center>
            </th>
            <th>
                <center>Actions</center>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
                require '../require/config.php';
                $query1 = $conn->query("SELECT * FROM `family_planning` NATURAL JOIN `patient` GROUP BY `patient_id` ORDER BY `family_planning_id` DESC") or die(mysqli_error());
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
                <center><?php echo $fetch1['purok']." ".$fetch1['street_address']?></center>
            </td>
            <td>
                <center><?php echo $fetch1['contact_no']?></center>
            </td>
            <td>
                <center><button class="btn btn-sm btn-default" data-toggle="modal" data-target="#fp_follow_up<?php echo $fetch1['patient_id']; ?>">Follow-up Visit</button></center>
            </td>
            <?php require('../modals/fp_follow_up.php'); ?>
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
