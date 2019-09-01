<?php
require '../require/config.php';
if(isset($_POST['show'])){
?>
<table id="exportimporttable" class="table datatable" width="100%">
    <thead>
        <tr>
            <th>User</th>
            <th>Activity</th>
            <th>Date and Time</th>
            <th>Remarks</th>
        </tr>
    </thead>
    <tbody>
        <?php
    $query = $conn->query("SELECT * FROM `db_backup`, `users` where users.user_id = db_backup.user_id ORDER BY `back_up_id` DESC") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        ?>                                      
        <tr>
           <td><?php echo $fetch['fullname']?></td>
            <td><?php echo $fetch['activity']?></td>
            <td><?php echo $fetch['date']. ' ' .$fetch['time']?></td>
            <td><?php echo $fetch['activity_status']?></td>
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