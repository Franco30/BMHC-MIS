<?php
require '../require/config.php';
if(isset($_POST['show'])){
?>
<table id="usertable" class="table datatable" width="100%">
<thead>
        <tr class="info">
            <th>Complete Name</th>
            <th>License</th>
            <th>Position</th>
            <th>Username</th>
            <th>Password</th>
            <th>Date and Time Created</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php
    $query = $conn->query("SELECT * FROM `users`") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        ?>                                      
        <tr>
            <td><?php echo $fetch['fullname']?></td>
            <td><?php echo $fetch['license']?></td>
            <td><?php echo $fetch['position']?></td>
            <td><?php echo $fetch['username']?></td>
            <td>********</td>
            <td><?php echo $fetch['date_created']. ' ' .$fetch['time_created']?></td>
            <td><?php  if ($fetch['status'] == '1') echo "<span class='badge badge-info'>Active</span>";
        if ($fetch['status'] == '0') echo "<span class='badge badge-danger'>Not Active</span>";
                ?></td>
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