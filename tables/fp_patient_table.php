<?php
require '../require/config.php';
if(isset($_POST['show'])){
?>
<table id="fppatienttable" class="table datatable">
    <thead>
        <tr class="warning">
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
            $q2 = $conn->query("SELECT * FROM `family_planning` WHERE `patient_id` = '$id' && `status` = 'No Assessment'") or die(mysqli_error());
            $f2 = $q2->fetch_array();
        ?>
        <tr>
            <td><strong><?php echo $fetch['patient_name']?></strong></td>
            <td><center><?php echo $fetch['age']?></center></td>
            <td><center><?php echo $fetch['contact_no']?></center></td>
            <td><?php echo $fetch['purok']." ".$fetch['street_address'];?></td>
            <td><center>
            <?php    
            if($f2['status'] == 'No Assessment')
                echo "<a href='patient_familyplanning?patient_id=".$fetch['patient_id']."' class='btn btn-md btn-default' data-toggle='tooltip' data-placement='top' title='Assessment Required'>All Records <span class='badge animated infinite pulse' style='animation-duration:.6s;background-color: #E04B4A;'>".$f['total']."</span></a>";
            else echo "<a href='patient_familyplanning?patient_id=".$fetch['patient_id']."' class='btn btn-md btn-default'>All Records <span class='badge'>".$f['total']."</span></a>";
            ?>
            </center></td>
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