<?php
require '../require/config.php';
if(isset($_POST['show']) && isset($_POST['child_id'])){
    $child_id = $_POST['child_id'];
?>
<div class="table-responsive">
<table id="brattysistable" class="table table-bordered">
    <thead>
        <tr class="warning">
            <th><center>Name</center></th>
            <th><center>Gender</center></th>
            <th><center>Date of Birth</center></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = $conn->query("SELECT * FROM `brothers_and_sisters` WHERE `child_id` = '$child_id'") or die(mysqli_error());
        while($fetch = $query->fetch_array()){
        ?>
        <tr>
            <td><center><?php echo $fetch['fullname']?></center></td>
            <td><center><?php echo $fetch['gender']?></center></td>
            <td><center><?php echo $fetch['birthdate']?></center></td>
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