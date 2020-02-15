<?php
require '../require/config.php';
if(isset($_POST['show'])){
?>
<table id="usermanagementtable" class="table datatable" width="100%">
    <thead>
        <tr class="warning">
            <th></th>
            <th><center>User ID</center></th>
            <th><center>Fullname</center></th>
            <th><center>Position</center></th>
            <th><center>License</center></th>
            <th><center>Username</center></th>
<!--            <th><center>Password</center></th>-->
            <th><center>Status</center></th>
            <th><center>Action</center></th>
        </tr>
    </thead>
    <tbody>
        <?php
    $query = $conn->query("SELECT * FROM users") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        ?>
        <tr>
            <td><center><input type="checkbox" name="user_id[]" class="deleteuser" value="<?php echo $fetch["user_id"]; ?>" /></center></td>
            <td><center><?php echo $fetch['user_id']?></center></td>
            <td><center><?php echo $fetch['fullname']?></center></td>
            <td><center><?php echo $fetch['position']?></center></td>
            <td><center><?php echo $fetch['license']?></center></td>
            <td><center><?php echo $fetch['username']?></center></td>
<!--            <td><center>*************</center></td>-->
            <td><center><?php  if ($fetch['status'] == '1') echo "<span class='badge badge-info'>Active</span>";
                if ($fetch['status'] == '0') echo "<span class='badge badge-danger'>Inactive</span>";?>
                </center></td>
            <td>
            <center>
                <button data-target="#edituser<?php echo $fetch['user_id']; ?>" data-toggle="modal" class="btn btn-sm btn-info"><span class="fa fa-edit"></span> UPDATE</button>
            </center>
                <?php require('../modals/edituser.php'); ?>
            </td>
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