<?php
require '../require/config.php';
if(isset($_POST['show'])){
?>
<table id="fppatienttable" class="table datatable">
    <thead>
        <tr>
            <th><center>Patient Name</center></th>
            <th><center>Age</center></th>
            <th><center>Contact No.</center></th>
            <th><center>Address</center></th>
            <th><center>Action</center></th>
        </tr>
    </thead>
    <tbody>
            <?php
    $query = $conn->query("SELECT * FROM `family_planning`, `patient` WHERE `family_planning`.`patient_id` = `patient`.`patient_id` GROUP BY `family_planning`.`patient_id` ORDER BY `family_planning`.`family_planning_id` DESC") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
            $id = $fetch['patient_id'];
            date_default_timezone_set('Asia/Manila');	
            $date_time=date("F j, Y - g:i a");
            $date=date("F j, Y");
            $q = $conn->query("SELECT COUNT(*) as total FROM `family_planning` WHERE `patient_id` = '$id'") or die(mysqli_error());
            $f = $q->fetch_array();
        ?>
        <tr>
            <td><center><strong><?php echo $fetch['patient_name']?></strong></center></td>
            <td><center><?php echo $fetch['age']?></center></td>
            <td><center><?php echo $fetch['contact_no']?></center></td>
            <td><center><?php echo $fetch['purok']." ".$fetch['street_address'];?></center></td>
            <td><center><a href="childpatientmasterfiletable.php" class="btn btn-md btn-default">View <span class = "badge"><?php echo $f['total']?></span></a></center></td>
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