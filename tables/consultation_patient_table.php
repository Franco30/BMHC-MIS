<?php
require '../require/config.php';
if(isset($_POST['show'])){
?>
<div class="table-responsive">
<table id="consultationpatienttable" class="table datatable">
    <thead>
        <tr class="warning">
            <th><center>Consultation ID</center></th>
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
    $query = $conn->query("SELECT * FROM `consultation`, `patient` WHERE `consultation`.`patient_id` = `patient`.`patient_id` GROUP BY `consultation`.`patient_id` ORDER BY `consultation`.`consultation_id` DESC") or die(mysqli_error());
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
            <td><center><strong><?php echo  $fetch['year']."".$fetch['consultation_id']?></strong></center></td>
            <td><center><strong><?php echo $fetch['patient_name']?></strong></center></td>
            <td><center><?php echo $fetch['age']?></center></td>
            <td><center><?php echo $fetch['gender']?></center></td>
            <td><center><?php echo $fetch['contact_no']?></center></td>
            <td><center><?php echo $fetch['purok']." ".$fetch['street_address'];?></center></td>
            <td><center>
            <?php    
            if($f2['status'] == 'No Prescription')
                echo "<a href='patient_consultation?patient_id=".$fetch['patient_id']."' class='btn btn-md btn-default' data-toggle='tooltip' data-placement='top' title='Prescription Required'>All Records <span class='badge animated infinite pulse' style='animation-duration:.6s;background-color: #E04B4A;'>".$f['total']."</span></a>";
            else echo "<a href='patient_consultation?patient_id=".$fetch['patient_id']."' class='btn btn-md btn-default'>All Records <span class='badge'>".$f['total']."</span></a>";
            ?>    
                </center></td>
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