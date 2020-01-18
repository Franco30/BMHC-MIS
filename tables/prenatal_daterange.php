<?php
$date1 = date("Y-m-d", strtotime($_POST['date1']));
$date2 = date("Y-m-d", strtotime($_POST['date2']));
$conn = new mysqli("localhost", "root", "", "bmhc")or die(mysqli_error());
//if(!$conn){
//	die("Fatal Error: Connection Error!");
//}
	
$q_book = $conn->query("SELECT * FROM `prenatal`, `patient` WHERE `prenatal`.`prenatal_date` BETWEEN '$date1' AND '$date2' && `patient`.`patient_id` = `prenatal`.`patient_id`  GROUP BY `prenatal`.`prenatal_id` order by `prenatal_id` DESC") or die(mysqli_error());

$v_book = $q_book->num_rows;
if($v_book > 0){
	while($f_book = $q_book->fetch_array()){
	?>
	<tr>
		<td><strong><center><?php echo $f_book['prenatal_id']?></center></strong></td>
		<td><strong><?php echo $f_book['patient_name']?></strong></td>
		<td><strong><center><?php echo date("m/d/Y", strtotime($f_book['prenatal_date']))?></center></strong></td>
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