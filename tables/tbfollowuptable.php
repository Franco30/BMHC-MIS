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
                <center>Actions</center>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
                require '../require/config.php';
                $query = $conn->query("SELECT * FROM patient WHERE `gender` = 'Female' ORDER BY `patient_id` DESC") or die(mysqli_error());
                while($fetch = $query->fetch_array()){
		?>
        <tr>
            <td>
                <center><?php echo $fetch['year']?><?php echo "0".$fetch['patient_id']?></center>
            </td>
            <td>
                <center><?php echo $fetch['patient_name']?></center>
            </td>
            <td>
                <center><button class="btn btn-default" data-toggle="modal"
                        data-target="#follow_up<?php echo $fetch['patient_id'];?>">Follow-up Visit</button></center>
            </td>
            <?php require('../modals/tb_follow_up.php'); ?>
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