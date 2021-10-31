<?php
require '../require/config.php';
if (isset($_POST['show']) && isset($_POST['c'])) {
    $c = $_POST['c'];
    ?>
<div class="table-responsive">
<table id="immunizationtreatment" class="table datatable" width="100%">
    <thead>
        <tr class="warning">
            <th><center>Treatment Type</center></th>
            <th><center>Date</center></th>
            <th><center>Age</center></th>
            <th><center>Weight</center></th>
            <th><center>Height</center></th>
            <th><center>Temperature</center></th>
            <th><center>Remarks</center></th>
        </tr>
    </thead>
    <tbody>
        <?php
        require '../require/config.php';
    $query = $conn->query("SELECT * FROM `immunization_treatment` WHERE `child_id` =  '$c'") or die(mysqli_error());
    while ($fetch = $query->fetch_array()) {
        ?>
        <tr>
            <td><center><strong><?php echo $fetch['treatment_type']?></strong></center></td>
            <td><center><?php echo $fetch['treatment_date']?></center></td>
            <td><center><?php echo $fetch['treatment_age']?></center></td>
            <td><center><?php echo $fetch['treatment_weight']?> kg.</center></td>
            <td><center><?php echo $fetch['treatment_height']?> cm.</center></td>
            <td><center><?php echo $fetch['treatment_temp']?> °C</center></td>
            <td><center><?php echo $fetch['treatment_remarks']?></center></td>
        </tr>
        <?php
    }
    $conn->close(); ?>
    </tbody>
</table>
     </div>
<?php
}
?>