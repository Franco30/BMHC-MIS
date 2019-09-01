<?php
require '../require/config.php';
if(isset($_POST['show'])){
?>
<table id="medicinetable" class="table table-hover datatable">
    <thead>
        <tr class="warning">
            <th>
                <center>Name</center>
            </th>
            <th>
                <center>Type</center>
            </th>
            <th>
                <center>Description</center>
            </th>
            <th>
                <center>Action</center>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
	$conn = new mysqli("localhost", "root", "", "bmhc") or die(mysqli_error());
			$query = $conn->query("SELECT * FROM `medicine` ORDER BY `medicine_id` DESC") or die(mysqli_error());
			while($fetch = $query->fetch_array()){
											?>
        <tr>
            <td>
                <center><?php echo $fetch['medicine_name']?></center>
            </td>
            <td>
                <center><?php echo $fetch['medicine_type']?></center>
            </td>
            <td>
                <center><?php echo $fetch['medicine_description']?></center>
            </td>
            <td>
                <center>
                        <button data-target="#editmedicine<?php echo $fetch['medicine_id']; ?>" data-toggle="modal" class="btn btn-sm btn-info"> Edit</button>
                </center>
                <?php require('../modals/edit_medicine.php'); ?>
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