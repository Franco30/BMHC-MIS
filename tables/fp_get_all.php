<?php
$conn = new mysqli("localhost", "root", "", "bmhc")or die(mysqli_error());
//if(!$conn){
//	die("Fatal Error: Connection Error!");
//}
	
$query = $conn->query("SELECT * FROM `family_planning`, `patient` WHERE `patient`.`patient_id` = `family_planning`.`patient_id` order by `family_planning_id` DESC LIMIT 16") or die(mysqli_error());

$check = $query->num_rows;
if($check > 0){
	while($fetch = $query->fetch_array()){
	?>
	<tr>
		<td><strong><center><?php echo $fetch['family_planning_id']?></center></strong></td>
		<td><strong><?php echo $fetch['patient_name']?></strong></td>
		<td><strong><center><?php echo date("m/d/Y", strtotime($fetch['date_time']))?></center></strong></td>
	</tr>
	<?php
	}
}else{
		echo '
		<tr>
			<td colspan = "4"><center>Record Not Found</center></td>
		</tr>
		';
}
	?>
