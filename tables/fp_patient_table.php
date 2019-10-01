<?php
require '../require/config.php';
if(isset($_POST['show'])){
?>
<table id="fppatienttable" class="table datatable">
    <thead>
        <tr>
            <th><center>Patient Name</center></th>
            <th><center>Type of Acceptor</center></th>
            <th><center>Previously used Method</center></th>
            <th><center>Birthdate</center></th>
            <th><center>Address</center></th>
            <th><center>Action</center></th>
        </tr>
    </thead>
    <tbody>
        <?php
    $query = $conn->query("SELECT *, COUNT(family_planning.patient_id) AS total FROM `patient`, `family_planning` WHERE patient.patient_id = family_planning.patient_id ORDER BY family_planning_id DESC") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        ?>
        <tr>
            <td><center><?php echo $fetch['patient_name']?></center></td>
            <td><center><?php echo $fetch['type_of_acceptor']?></center></td>
            <td><center><?php echo $fetch['prev_used_method']?></center></td>
            <td><center><?php echo $fetch['birthdate']?></center></td>
            <td><center><?php echo $fetch['address']?></center></td>
            <td><center><a href="childpatientmasterfiletable.php" class="btn btn-md btn-default">View <span class = "badge"><?php echo $fetch['total']?></span></a></center></td>
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