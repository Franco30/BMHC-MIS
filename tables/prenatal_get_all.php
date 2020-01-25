<?php
$conn = new mysqli("localhost", "root", "", "bmhc")or die(mysqli_error());
//if(!$conn){
//	die("Fatal Error: Connection Error!");
//}
	
$query = $conn->query("SELECT * FROM `prenatal`, `patient` WHERE `patient`.`patient_id` = `prenatal`.`patient_id` order by `prenatal_id` DESC LIMIT 16") or die(mysqli_error());

$check = $query->num_rows;
if($check > 0){
	while($fetch = $query->fetch_array()){
	?>
	<tr>
		<td><strong><center><?php echo $fetch['prenatal_id']?></center></strong></td>
		<td><strong><?php echo $fetch['patient_name']?></strong></td>
		<td><strong><center><?php echo date("m/d/Y", strtotime($fetch['prenatal_date']))?></center></strong></td>
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
