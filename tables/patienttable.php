<?php
require '../require/config.php';
if(isset($_POST['show'])){
?>
<table id="patienttable" class="table datatable">
    <thead>
        <tr>
            <th><center>Patient ID</center></th>
            <th><center>Patient Name</center></th>
            <th><center>Age</center></th>
            <th><center>Gender</center></th>
            <th><center>Birthdate</center></th>
            <th><center>Address</center></th>
            <th><center>Contact Number</center></th>
        </tr>
    </thead>
    <tbody>
        <?php
    $query = $conn->query("select * from `patient` order by `patient_id` DESC") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        ?>
        <tr>
            <td><center><?php echo $fetch['year']."0".$fetch['patient_id'];?></center></td>
            <td><center><?php echo $fetch['patient_name']?></center></td>
            <td><center><?php echo $fetch['age']?> years old</center></td>
            <td><center><?php echo $fetch['gender']?></center></td>
            <td><center><?php echo $fetch['birthdate']?></center></td>
            <td><center><?php echo $fetch['address']?></center></td>
            <td><center><?php echo $fetch['contact_no']?></center></td>
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