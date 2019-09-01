<?php
require '../require/config.php';
if(isset($_POST['show'])){
?>
<table id="followuptable" class="table datatable hover">
    <thead>
        <tr class="warning">
            <th>
                <center>Patient Name</center>
            </th>
            <th>
                <center>Type of Services</center>
            </th>
            <th>
                <center>Follow-up Date</center>
            </th>
            <th>
                <center>Actions</center>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
                require '../require/config.php';
                $query = $conn->query("SELECT * FROM `follow_up`, patient WHERE patient.patient_id = follow_up.patient_id ORDER BY `follow_up_date` DESC") or die(mysqli_error());
                while($fetch = $query->fetch_array()){
		?>
        <tr>
            <td>
                <center><?php echo $fetch['patient_name']?></center>
            </td>
            <td>
                <center><?php echo $fetch['patient_service']?></center>
            </td>
            <td>
                <center><?php echo $fetch['follow_up_date']?></center>
            </td>
            <td>
                <center><button type="button" class="btn btn-default">Follow-up Visit</button></center>
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