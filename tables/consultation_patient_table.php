<?php
require '../require/config.php';
if(isset($_POST['show'])){
?>
<div class="table-responsive">
<table id="consultationpatienttable" class="table datatable">
    <thead>
        <tr>
            <th><center>Patient Name</center></th>
            <th>Age</th>
            <th><center>Gender</center></th>
            <th><center>Contact Number</center></th>
            <th><center>Address</center></th>
            <th><center>Action</center></th>
        </tr>
    </thead>
    <tbody>
    <?php
    $query = $conn->query("SELECT * FROM `patient` WHERE `status` = 'Registered'") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
            $id = $fetch['patient_id'];
            date_default_timezone_set('Asia/Manila');	
            $date_time=date("F j, Y - g:i a");
            $date=date("F j, Y");
            $q = $conn->query("SELECT COUNT(*) as total FROM `consultation` WHERE `patient_id` = '$id'") or die(mysqli_error());
            $f = $q->fetch_array();
            $q2 = $conn->query("SELECT * FROM `consultation` WHERE `patient_id` = '$id' && `status` = 'No Prescription'") or die(mysqli_error());
            $f2 = $q2->fetch_array();
        ?>
        <tr>
            <td><center><?php echo $fetch['patient_name']?></center></td>
            <td><center><?php echo $fetch['age']?></center></td>
            <td><center><?php echo $fetch['gender']?></center></td>
            <td><center><?php echo $fetch['contact_no']?></center></td>
            <td><center><?php echo $fetch['purok']." ".$fetch['street_address'];?></center></td>
            <td><center><a href="patient_consultation?patient_id=<?php echo $fetch['patient_id'];?>" class="btn btn-md btn-default">View
            <?php    
            if($f2['status'] == 'No Prescription')
                echo "<span class='badge animated infinite pulse' style='animation-duration:.6s;background-color: #E04B4A;'>".$f['total']."</span>";
            else echo "<span class='badge'>".$f['total']."</span>";
            ?>    
                </a></center></td>
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