<?php
require '../require/config.php';
if(isset($_POST['show'])){
?>
<table id="prenatalpatienttable" class="table datatable">
    <thead>
        <tr>
            <th><center>Child Name</center></th>
            <th><center>Gender</center></th>
            <th><center>Birthdate</center></th>
            <th><center>Complete Address</center></th>
            <th><center>Action</center></th>
        </tr>
    </thead>
    <tbody>
        <?php
    $query = $conn->query("select * from `patient_child` order by `child_id` DESC") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        ?>
        <tr>
            <td><center><strong><?php echo $fetch['child_name']?></strong></center></td>
            <td><center><?php echo $fetch['gender']?></center></td>
            <td><center><?php echo $fetch['birthdate']?></center></td>
            <td><center>Prk. <?php echo $fetch['purok']." ".$fetch['street_address']?></center></td>
            <td><center><a href="add_prenatal?id=<?php echo $fetch['child_id'];?>" class="btn btn-sm btn-default">View</a></center></td>
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