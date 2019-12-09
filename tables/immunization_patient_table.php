<?php
require '../require/config.php';
if(isset($_POST['show'])){
?>
<table id="prenatalpatienttable" class="table datatable">
    <thead>
        <tr class="warning">
            <th><center>Child Name</center></th>
            <th><center>Mother's Name</center></th>
            <th><center>Father's Name</center></th>
            <th><center>Gender</center></th>
            <th><center>Birthdate</center></th>
            <th><center>Action</center></th>
        </tr>
    </thead>
    <tbody>
        <?php
$query = $conn->query("SELECT * FROM `immunization`, `patient_child` WHERE `patient_child`.`child_id` = `immunization`.`child_id`") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        ?>
        <tr>
            <td><strong><?php echo $fetch['child_name']?></strong></td>
            <td><?php echo $fetch['mother_name']?></td>
            <td><?php echo $fetch['father_name']?></td>
            <td><center><?php echo $fetch['gender']?></center></td>
            <td><center><?php echo $fetch['birthdate']?></center></td>
            <td><center>
            <a href="immunization_treatment?child_id=<?php echo $fetch['child_id'];?>&&immunization_id=<?php echo $fetch['immunization_id']?>" class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="top" title="Treatment">
            <span class="fa fa-heartbeat" style="margin-right: 0px;"></span></a>
            <a href="immunization_consultation?child_id=<?php echo $fetch['child_id'];?>&&immunization_id=<?php echo $fetch['immunization_id']?>" class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="top" title="Consultation">
                <span class="fa fa-stethoscope" style="margin-right: 0px;"></span></a>
                <button type="button" class="btn btn-sm btn-info">Edit</button>
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