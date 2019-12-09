<?php
require '../require/config.php';
if(isset($_POST['show'])){
?>
<table id="prenatalpatienttable" class="table datatable">
    <thead>
        <tr class="warning">
            <th><center>Patient Name</center></th>
            <th><center>Age</center></th>
            <th><center>Birthdate</center></th>
            <th><center>Address</center></th>
            <th><center>Action</center></th>
        </tr>
    </thead>
    <tbody>
        <?php
    $query = $conn->query("SELECT * FROM `prenatal`, `patient` WHERE `prenatal`.`patient_id` = `patient`.`patient_id` GROUP BY `prenatal`.`patient_id` ORDER BY `prenatal`.`prenatal_id` DESC") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
            $id = $fetch['patient_id'];
            $q = $conn->query("SELECT COUNT(*) as total FROM `prenatal` WHERE `patient_id` = '$id'") or die(mysqli_error());
            $f = $q->fetch_array();
        ?>
        <tr>
            <td><strong><?php echo $fetch['patient_name']?></strong></td>
            <td><center><?php echo $fetch['age']?> years old</center></td>
            <td><center><?php echo $fetch['birthdate']?></center></td>
            <td>Purok <?php echo $fetch['purok']." ".$fetch['street_address']?></td>
            <td><center><a href="patient_prenatal?patient_id=<?php echo $fetch['patient_id'];?>" class="btn btn-md btn-default">All Records <span class="badge"><?php echo $f['total']?></span></a>
                <button type="button" class="btn btn-md btn-info">Edit</button>
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