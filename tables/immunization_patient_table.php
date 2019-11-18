<?php
require '../require/config.php';
if(isset($_POST['show'])){
?>
<table id="prenatalpatienttable" class="table datatable">
    <thead>
        <tr>
            <th><center>Child Name</center></th>
            <th><center>Mother's Name</center></th>
            <th><center>Father's Name</center></th>
            <th><center>Gender</center></th>
            <th><center>Birthdate</center></th>
            <th><center>Complete Address</center></th>
            <th><center>Action</center></th>
        </tr>
    </thead>
    <tbody>
        <?php
$query = $conn->query("SELECT * FROM `immunization`, `patient_child` WHERE `patient_child`.`child_id` = `immunization`.`child_id`") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        ?>
        <tr>
            <td><center><strong><?php echo $fetch['child_name']?></strong></center></td>
            <td><center><?php echo $fetch['mother_name']?></center></td>
            <td><center><?php echo $fetch['father_name']?></center></td>
            <td><center><?php echo $fetch['gender']?></center></td>
            <td><center><?php echo $fetch['birthdate']?></center></td>
            <td><center>Prk. <?php echo $fetch['purok']." ".$fetch['street_address']?></center></td>
            <td><center>
            <a href="patient_immunization?id=<?php echo $fetch['child_id'];?>" class="btn btn-sm btn-info">
                <span class="fa fa-stethoscope"></span> Treatment</a>
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