<?php
require '../require/config.php';
if(isset($_POST['show'])){
?>
<table id="dssmtable" class="table datatable">
    <thead>
        <tr>
            <th><center>Patient Name</center></th>
            <th><center>Date Examined</center></th>
            <th><center>Laboratory Diagnosis</center></th>
            <th><center>Examined By</center></th>
            <th><center>Date Released</center></th>
            <th><center>Action</center></th>
        </tr>
    </thead>
    <tbody>
        <?php
    $query = $conn->query("select *, count(patient_id) as total from `dssm_examination` GROUP BY patient_id order by `dssm_id` DESC") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        ?>
        <tr>
            <td><center><?php echo $fetch['patient_id']?></center></td>
            <td><center><?php echo $fetch['date_examined']?> years old</center></td>
            <td><center><?php echo $fetch['laboratory_diagnosis']?></center></td>
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