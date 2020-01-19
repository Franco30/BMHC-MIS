<?php
$date1 = date("Y-m-d", strtotime($_POST['date1']));
$date2 = date("Y-m-d", strtotime($_POST['date2']));
$conn = new mysqli("localhost", "root", "", "bmhc")or die(mysqli_error());
//if(!$conn){
//	die("Fatal Error: Connection Error!");
//}
	
$query = $conn->query("SELECT * FROM `immunization`, `patient_child` WHERE `immunization`.`date_time` BETWEEN '$date1' AND '$date2' && `patient_child`.`child_id` = `immunization`.`child_id`  GROUP BY `immunization`.`immunization_id` order by `immunization_id` DESC") or die(mysqli_error());

$check = $query->num_rows;
if($check > 0){
	while($fetch = $query->fetch_array()){
	?>
	<tr>
		<td><strong><center><?php echo $fetch['immunization_id']?></center></strong></td>
		<td><strong><?php echo $fetch['child_name']?></strong></td>
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