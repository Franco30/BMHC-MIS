<?php
require '../require/config.php';
if(isset($_POST['show'])){
?>
<table id="mdtable" class="table datatable hover">
    <thead>
        <tr class="warning">
            <th>
                <center>Medicine Name</center>
            </th>
            <th>
                <center>Date and TIme</center>
            </th>
            <th>
                <center>Quantity</center>
            </th>
            <th>
                <center>Patient Name</center>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
                require '../require/config.php';
                $query = $conn->query("SELECT * FROM `patient`, `medication_dispensation`, `medicine` WHERE patient.patient_id = medication_dispensation.patient_id && medicine.medicine_id = medication_dispensation.medicine_id ORDER BY `dispensation_id` DESC") or die(mysqli_error());
                while($fetch = $query->fetch_array()){
		?>
        <tr>
            <td>
                <center><?php echo $fetch['medicine_name']?></center>
            </td>
            <td>
                <center><?php echo $fetch['date_given'].' - '.$fetch['time_given']?></center>
            </td>
            <td>
                <center><?php echo $fetch['quantity']?></center>
            </td>
            <td>
                <center><?php echo $fetch['patient_name']?></center>
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