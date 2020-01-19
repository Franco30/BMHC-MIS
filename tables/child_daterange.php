<?php
$date1 = date("Y-m-d", strtotime($_POST['date1']));
$date2 = date("Y-m-d", strtotime($_POST['date2']));
$conn = new mysqli("localhost", "root", "", "bmhc")or die(mysqli_error());
//if(!$conn){
//	die("Fatal Error: Connection Error!");
//}
	
$query = $conn->query("SELECT * FROM `patient_child` WHERE `date` BETWEEN '$date1' AND '$date2' order by `date` DESC") or die(mysqli_error());

$check = $query->num_rows;
if($check > 0){
	while($fetch = $query->fetch_array()){
	?>
	<tr>
		<td><strong><center><?php echo $fetch['year']."".$fetch['child_id']?></center></strong></td>
		<td><strong><?php echo $fetch['child_name']?></strong></td>
		<td><strong><center><?php echo date("m/d/Y", strtotime($fetch['date']))?></center></strong></td>
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
