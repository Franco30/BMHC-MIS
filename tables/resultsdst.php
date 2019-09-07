<?php
require '../require/config.php';
if(isset($_POST['show'])){
?>
<table id="dsttable" class="table datatable">
    <thead>
        <tr>
            <th><center>Patient Name</center></th>
            <th><center>DST Laboratory</center></th>
            <th><center>Date Collected</center></th>
            <th><center>Method</center></th>
            <th><center>Examined By</center></th>
            <th><center>Date Released</center></th>
            <th><center>Action</center></th>
        </tr>
    </thead>
    <tbody>
        <?php
    $query = $conn->query("select *, count(patient_id) as total from `dst_examination` GROUP BY patient_id order by `dst_id` DESC") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        ?>
        <tr>
            <td><center><?php echo $fetch['patient_id']?></center></td>
            <td><center><?php echo $fetch['dst_laboratory']?> years old</center></td>
            <td><center><?php echo $fetch['date_collected']?></center></td>
            <td><center><?php echo $fetch['method']?></center></td>
            <td><center><?php echo $fetch['examined_by']?></center></td>
            <td><center><?php echo $fetch['date_released']?></center></td>
            <td>
            <a class="btn btn-md btn-default">View <span class = "badge"><?php echo $fetch['total']?></span></a>
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