<?php
require '../require/config.php';
if(isset($_POST['show'])){
?>
<div class="table-responsive">
<table id="usertable" class="table datatable" width="100%">
<thead>
        <tr class="warning">
            <th><center>Complete Name</center></th>
            <th><center>License</center></th>
            <th><center>Position</center></th>
            <th><center>Username</center></th>
<!--            <th><center>Password</center></th>-->
            <th><center>Date and Time Created</center></th>
            <th><center>Status</center></th>
        </tr>
    </thead>
    <tbody>
        <?php
    $query = $conn->query("SELECT * FROM `users`") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        ?>                                      
        <tr>
            <td><center><?php echo $fetch['fullname']?></center></td>
            <td><center><?php echo $fetch['license']?></center></td>
            <td><center><?php echo $fetch['position']?></center></td>
            <td><center><?php echo $fetch['username']?></center></td>
<!--            <td><center>********</center></td>-->
            <td><center><?php echo $fetch['date_created']. ' ' .$fetch['time_created']?></center></td>
            <td><center><?php  if ($fetch['status'] == '1') echo "<span class='badge badge-info'>Active</span>";
        if ($fetch['status'] == '0') echo "<span class='badge badge-danger'>Not Active</span>";
                ?></center></td>
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