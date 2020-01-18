<?php
$date1 = date("Y-m-d", strtotime($_POST['date1']));
$date2 = date("Y-m-d", strtotime($_POST['date2']));
$conn = new mysqli("localhost", "root", "", "bmhc")or die(mysqli_error());
//if(!$conn){
//	die("Fatal Error: Connection Error!");
//}
	
$q_book = $conn->query("SELECT * FROM `consultation`, `patient` WHERE `consultation`.`consultation_date` BETWEEN '$date1' AND '$date2' && `patient`.`patient_id` = `consultation`.`patient_id`  GROUP BY `consultation`.`consultation_id` order by `consultation_id` DESC") or die(mysqli_error());

$v_book = $q_book->num_rows;
if($v_book > 0){
	while($f_book = $q_book->fetch_array()){
	?>
	<tr>
		<td><strong><center><?php echo $f_book['consultation_id']?></center></strong></td>
		<td><strong><?php echo $f_book['patient_name']?></strong></td>
		<td><strong><center><?php echo date("m/d/Y", strtotime($f_book['consultation_date']))?></center></strong></td>
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