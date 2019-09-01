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
                <center>Date and Time</center>
            </th>
            <th>
                <center>Number of Kits</center>
            </th>
            <th>
                <center>Received By</center>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
                require '../require/config.php';
                $query = $conn->query("SELECT * FROM `medication_dispensation` ORDER BY `dispensation_id` DESC") or die(mysqli_error());
                while($fetch = $query->fetch_array()){
		?>
        <tr>
            <td>
                <center><?php echo $fetch['medicine_name']?></center>
            </td>
            <td>
                <center><?php echo $fetch['date_given']?></center>
            </td>
            <td>
                <center><?php echo $fetch['quantity']?> kits</center>
            </td>
            <td>
                <center><?php echo $fetch['received_by']?></center>
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