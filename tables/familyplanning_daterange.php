<?php
// Range.php
if(isset($_POST["From"], $_POST["to"]))
{
	$conn = mysqli_connect("localhost", "root", "", "bmhc")or die(mysqli_error());
	$result = '';
	$query = "SELECT * FROM `family_planning`, `patient` WHERE `family_planning`.`date_time` BETWEEN '".$_POST["From"]."' AND '".$_POST["to"]."' && `patient`.`patient_id` = `family_planning`.`patient_id`  GROUP BY `family_planning`.`family_planning_id` order by `family_planning_id` DESC ";
		
	$sql = mysqli_query($conn, $query);
	$result .='
	<div class="table-responsive">
	<table class="table table-hover table-bordered">
	<tr class="warning">
		<th><center>Patient No</center></th>
		<th><center>Patient Name</center></th>
		<th><center>Date</center></th>
	</tr>';
	$q2 = "SELECT COUNT(*) AS `total` FROM `family_planning` WHERE `date_time` BETWEEN '".$_POST["From"]."' AND '".$_POST["to"]."'";
	$total = mysqli_query($conn, $q2);
	$t2 = mysqli_fetch_array($total);
	if(mysqli_num_rows($sql) > 0)
	{
		while($row = mysqli_fetch_array($sql))
		{
			$result .='
			<tr>
			<td><center><strong>'.$row["year"].'0'.$row["family_planning_id"].'</center></strong></td>
			<td><strong>'.$row["patient_name"].'</strong></td>
			<td><center>'.$row["date_time"].'</center></td>
			</tr>';
		}
			$result .='
			<tr class="danger">
				<td><h3><strong>Grand Total</strong></h3></td>
				<td><center><strong><span class="label label-danger" style="font-size:15px;">'.$t2['total'].'</span></strong></center></td>
				<td><strong></strong></td>
				</tr>';
	}
	else
	{
		$result .='
		<tr>
		<td colspan="5"><center>No data available in table</center></td>
		</tr>';
	}
	$result .='</table></div>';
	echo $result;
}
?>
