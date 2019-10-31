<?php
require '../require/config.php';
if(isset($_POST['show'])){
?>
<div class="table-responsive">
<table id="childpatienttable" class="table datatable">
    <thead>
        <tr>
            <th><center>Patient ID</center></th>
            <th><center>Patient Name</center></th>
            <th><center>Gender</center></th>
            <th><center>Birthdate</center></th>
            <th><center>Purok</center></th>
            <th><center>Street Address</center></th>
            <th><center>Mother's Name</center></th>
            <th><center>Father's Name</center></th>
        </tr>
    </thead>
    <tbody>
        <?php
    $query = $conn->query("select * from `patient_child` order by `child_id` DESC") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        ?>
        <tr>
            <td><center><strong><?php echo $fetch['year']."0".$fetch['child_id'];?></strong></center></td>
            <td><center><strong><?php echo $fetch['child_name']?></strong></center></td>
            <td><center><?php echo $fetch['gender']?></center></td>
            <td><center><?php echo $fetch['birthdate']?></center></td>
            <td><center>Prk. <?php echo $fetch['purok']?></center></td>
            <td><center><?php echo $fetch['street_address']?></center></td>
            <td><center><?php echo $fetch['mother_name']?></center></td>
            <td><center><?php echo $fetch['father_name']?></center></td>
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